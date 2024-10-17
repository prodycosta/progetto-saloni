<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Gestisce il processo di login
    public function login(Request $request)
{
    // Validazione dei dati di input
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    // Tentativo di autenticazione
    if (Auth::attempt($credentials)) {
        // Autenticazione riuscita
        return redirect()->intended('/');
    } else {
        // Autenticazione fallita
        return back()->withErrors(['email' => 'Email o password non validi']);
    }
}

    // Mostra il form di registrazione
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Gestisce il processo di registrazione
    public function register(Request $request)
{
    // Validazione dei dati di input
    $validatedData = $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
        'surname' => ['required', 'string', 'max:255'],
        'gender' => ['required', 'in:male,female'],
    ]);

    // Creazione di un nuovo utente
    User::create([
        'name' => $validatedData['name'],
        'email' => $validatedData['email'],
        'password' => Hash::make($validatedData['password']),
        'surname' => $validatedData['surname'],
        'gender' => $validatedData['gender'],
    ]);

    // Reindirizzamento dopo la registrazione con messaggio di successo
    return redirect('/')->with('success', 'Registrazione completata con successo! Effettua il login.');
}

public function logout(Request $request)
{
    Auth::logout(); // Effettua il logout dell'utente
    return redirect('/'); // Reindirizza alla home o ad un'altra pagina dopo il logout
}


}
