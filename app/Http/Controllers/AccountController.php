<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salone; // Assicurati di importare il modello Salone

class AccountController extends Controller
{
    public function index()
    {
        // Recupera i dati dell'utente autenticato
        $user = auth()->user();

        // Recupera i saloni pubblicati dall'utente
        $saloni = Salone::where('user_id', $user->id)->get();

        // Passa i dati dell'utente e i saloni alla vista
        return view('pages.account', compact('user', 'saloni'));
    }
}
