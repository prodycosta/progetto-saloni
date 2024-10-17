<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salone;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Response;


class MapController extends Controller
{
    public function mostraMappa(Request $request) {
        $saloni = Salone::all();
        $trattamento = $request->input('trattamento');
        $data = $request->input('data');
        $posizione = $request->input('posizione');


        $servizi = [
            'servizio_capelli' => 'Capelli',
            'servizio_depilazione' => 'Depilazione',
            'servizio_viso' => 'Viso',
            'servizio_unghie' => 'Unghie',
            'servizio_corpo' => 'Corpo',
            'servizio_massaggio' => 'Massaggio',
            'servizio_uomo' => 'Per uomo'
        ];

        $saloniQuery = Salone::query();

        if (!empty($trattamento)) {
            $colonnaTrattamento = 'servizio_' . $trattamento;
            $saloniQuery->where($colonnaTrattamento, 1); // Filtra per il trattamento selezionato
        }

if (!empty($posizione)) {
    $saloniQuery->where('posizione', 'like', '%' . $posizione . '%'); // Filtra per la posizione selezionata
}

$saloni = $saloniQuery->get();

if ($request->ajax()) {
    return response()->json([
        'saloni' => $saloni->map(function ($salone) {
            return [
                'id' => $salone->id,
                'nome_salone' => $salone->nome_salone,
                'posizione' => $salone->posizione,
                'numero_telefono' => $salone->numero_telefono,
                'immagini' => json_decode($salone->immagini)
            ];
        }),
    ]);
}

        return view('pages.map', [
            'saloni' => $saloni,
            'trattamento' => $trattamento,
            'data' => $data,
            'posizione' => $posizione,
            'servizi' => $servizi,
            'title' => 'Mappa'
        ]);
    }

}
