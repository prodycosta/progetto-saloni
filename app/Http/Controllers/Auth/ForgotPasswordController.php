<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
        Log::info('[RESET PASSWORD] Richiesta di reset ricevuta', ['email' => $request->email]);

        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        $token = Str::random(64);
        $now = Carbon::now();

        DB::table('password_reset_tokens')->updateOrInsert(
            ['email' => $request->email],
            ['token' => $token, 'created_at' => $now]
        );

        Log::info('[RESET PASSWORD] Token generato e salvato', ['token' => $token]);

        try {
            Mail::send('emails.forget-password', ['token' => $token], function ($message) use ($request) {
                $message->to($request->email)->subject('Reset Password');
            });

            Log::info('[RESET PASSWORD] Email inviata con successo', ['email' => $request->email]);
            return back()->with('success', 'Controlla la tua email per reimpostare la password.');

        } catch (\Exception $e) {
            Log::error('[RESET PASSWORD] Errore nell\'invio della mail', [
                'email' => $request->email,
                'error' => $e->getMessage()
            ]);
            return back()->with('error', 'Si è verificato un errore. Contatta l\'assistenza.');
        }
    }

    public function resetPassword($token)
    {
        Log::info('[RESET PASSWORD] Visualizzazione form reset', ['token' => $token]);
        return view('pages.reset-password', compact('token'));
    }

    public function resetPasswordPost(Request $request)
    {
        Log::info('[RESET PASSWORD] Invio nuova password per', ['email' => $request->email]);

        $request->validate([
            'email' => 'required|email|exists:users,email',
            'token' => 'required',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $record = DB::table('password_reset_tokens')->where([
            'email' => $request->email,
            'token' => $request->token,
        ])->first();

        if (!$record) {
            Log::warning('[RESET PASSWORD] Token non valido o scaduto', [
                'email' => $request->email,
                'token' => $request->token
            ]);
            return redirect()->back()->withErrors(['token' => 'Token non valido o scaduto.']);
        }

        User::where('email', $request->email)->update([
            'password' => Hash::make($request->password)
        ]);

        DB::table('password_reset_tokens')->where('email', $request->email)->delete();

        Log::info('[RESET PASSWORD] Password aggiornata con successo', ['email' => $request->email]);

        return redirect()->route('auth.login')->with('success', 'Password aggiornata con successo! Ora puoi accedere.');
    }
}
