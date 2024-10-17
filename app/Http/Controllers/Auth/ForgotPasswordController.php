<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class ForgotPasswordController extends Controller
{
    public function showLinkRequestForm()
    {
        return view('pages.forgot-password');
    }

    public function showLinkRequestFormPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(64);
        $now = Carbon::now();

        // Controlla se l'email è già presente
        $existingToken = DB::table('password_reset_tokens')->where('email', $request->email)->first();

        if ($existingToken) {
            // Se l'email esiste, aggiorna il token
            DB::table('password_reset_tokens')->where('email', $request->email)->update([
                'token' => $token,
                'created_at' => $now
            ]);
            Log::info("Token aggiornato per l'email: " . $request->email);
        } else {
            // Se l'email non esiste, inserisci un nuovo record
            DB::table('password_reset_tokens')->insert([
                'email' => $request->email,
                'token' => $token,
                'created_at' => $now
            ]);
            Log::info("Token inserito per l'email: " . $request->email);
        }

        // Invia l'email con il token
        Mail::send("emails.forget-password", ["token" => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject("Reset Password");
        });

        return redirect()->to(route("pages.forgot-password"))->with("success", "Controlla la tua email per le istruzioni di reset della password.");
    }


    public function resetPassword($token)
    {
        return view("pages.reset-password", compact('token'));
    }

    public function resetPasswordPost(Request $request)
    {
        try {
            $request->validate([
                "email" => "required|email|exists:password_reset_tokens,email",
                "token" => "required|string",
                "password" => "required|string|min:6|confirmed",
                "password_confirmation" => "required"
            ], [
                'password.confirmed' => 'La conferma della password non corrisponde.'
            ]);

            // Controlla se il token è valido
            $updatePassword = DB::table('password_reset_tokens')
                ->where([
                    "email" => $request->input('email'),
                    "token" => $request->input('token'),
                ])->first();

            if (!$updatePassword) {
                return redirect()->to(route("pages.reset-password"))->with("error", "Token non valido");
            }

            // Aggiorna la password dell'utente
            $updateResult = User::where("email", $request->email)->update(["password" => Hash::make($request->password)]);

            // Controlla se l'aggiornamento ha avuto successo
            if ($updateResult === 0) {
                Log::error("Nessuna riga aggiornata per l'email: " . $request->email);
            }

            // Elimina il record del token dopo l'uso
            DB::table("password_reset_tokens")->where(["email" => $request->email])->delete();

            return redirect()->to(route("pages.corpo.bendaggi"))->with("success", "Password reset success");
        } catch (\Exception $e) {
            // Registra l'errore nel log per la diagnostica
            Log::error("Errore durante il reset della password: " . $e->getMessage());
            return redirect()->back()->withInput()->withErrors(['password' => 'Si è verificato un errore durante il reset della password.']);
        }
    }
}
