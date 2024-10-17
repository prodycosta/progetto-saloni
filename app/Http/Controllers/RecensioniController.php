<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recensione;

class RecensioniController extends Controller
{
    // Mostra la pagina delle recensioni
    public function index()
    {
        // Recupera tutte le recensioni dal database
        $recensioni = Recensione::all();

        // Passa le recensioni alla vista
        return view('pages.salone.show', compact('recensioni'));
    }

    // Salva una nuova recensione
    public function salva(Request $request)
    {
        // Valida i dati
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'recensione' => 'required|string',
            'salone_id' => 'required|exists:saloni,id',
            'voto' => 'required|integer|between:1,5',
        ]);

        // Crea una nuova recensione
        Recensione::create([
            'nome' => $validatedData['nome'],
            'recensione' => $validatedData['recensione'],
            'salone_id' => $validatedData['salone_id'],
            'data_recensione' => now(),
            'voto' => $validatedData['voto'],
        ]);

        // Reindirizza alla pagina delle recensioni con un messaggio di successo
        return redirect()->route('salone.show', ['id' => $validatedData['salone_id']])
        ->with('success', 'Recensione aggiunta con successo!')
        ->with('scroll_to_reviews', true);
    }
}
