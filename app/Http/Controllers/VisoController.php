<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salone;

class VisoController extends Controller
{
    public function index()
    {
        return view('viso');
    }

    public function colorazioneCigliaESopracciglia(Request $request)
    {

        $trattamento = $request->input('trattamento');
        $data = $request->input('data');
        $posizione = $request->input('posizione');

        $ordina = $request->input('ordina');

        $giorno = !empty($data) ? date('l', strtotime($data)) : null;
        $servizio_viso = $request->input('servizio_viso') ?? true;

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

        $saloniQuery->where('servizio_viso', 1);

        if (!empty($trattamento)) {
            $colonnaTrattamento = 'servizio_' . $trattamento;
            $saloniQuery->where($colonnaTrattamento, 1); // Filtra per il trattamento selezionato
        }

if (!empty($posizione)) {
    $saloniQuery->where('posizione', 'like', '%' . $posizione . '%'); // Filtra per la posizione selezionata
}

if ($giorno) {
    switch ($giorno) {
        case 'Monday':
            $saloniQuery->where('giorno_lunedi', true);
            break;
        case 'Tuesday':
            $saloniQuery->where('giorno_martedi', true);
            break;
        case 'Wednesday':
            $saloniQuery->where('giorno_mercoledi', true);
            break;
        case 'Thursday':
            $saloniQuery->where('giorno_giovedi', true);
            break;
        case 'Friday':
            $saloniQuery->where('giorno_venerdi', true);
            break;
        case 'Saturday':
            $saloniQuery->where('giorno_sabato', true);
            break;
        case 'Sunday':
            $saloniQuery->where('giorno_domenica', true);
            break;
    }
}

if ($ordina == 'prezzo-alto') {
    $saloniQuery->orderBy('prezzo_colorazione_ciglia_sopracciglia', 'desc'); // Ordinamento dal prezzo più alto al più basso
} elseif ($ordina == 'prezzo-basso') {
    $saloniQuery->orderBy('prezzo_colorazione_ciglia_sopracciglia', 'asc'); // Ordinamento dal prezzo più basso al più alto
} elseif ($ordina == 'recente') {
    $saloniQuery->orderBy('created_at', 'desc'); // Ordinamento per data recente
} elseif ($ordina == 'valutazione-alta') {
    $saloniQuery->orderBy('valutazione', 'desc'); // Ordinamento per valutazione
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
                'immagini' => json_decode($salone->immagini),
                'prezzo_colorazione_ciglia_sopracciglia' => $salone->prezzo_colorazione_ciglia_sopracciglia

            ];
        }),
    ]);
}

return view('pages.viso.colorazione_ciglia_e_sopracciglia', [
    'saloni' => $saloni,
    'trattamento' => $trattamento,
    'data' => $data,
    'posizione' => $posizione,
    'servizi' => $servizi,
    'servizio_viso' => $servizio_viso,
    'title' => 'Colorazione ciglia e sopracciglia'
]);
}

    public function depilazioneConFiloOrientaleSopracciglia(Request $request)
    {
        $trattamento = $request->input('trattamento');
        $data = $request->input('data');
        $posizione = $request->input('posizione');
        $ordina = $request->input('ordina');

        $giorno = !empty($data) ? date('l', strtotime($data)) : null;
        $servizio_viso = $request->input('servizio_viso') ?? true;


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

        $saloniQuery->where('servizio_viso', 1);

        if (!empty($trattamento)) {
            $colonnaTrattamento = 'servizio_' . $trattamento;
            $saloniQuery->where($colonnaTrattamento, 1); // Filtra per il trattamento selezionato
        }

if (!empty($posizione)) {
    $saloniQuery->where('posizione', 'like', '%' . $posizione . '%'); // Filtra per la posizione selezionata
}

if ($giorno) {
    switch ($giorno) {
        case 'Monday':
            $saloniQuery->where('giorno_lunedi', true);
            break;
        case 'Tuesday':
            $saloniQuery->where('giorno_martedi', true);
            break;
        case 'Wednesday':
            $saloniQuery->where('giorno_mercoledi', true);
            break;
        case 'Thursday':
            $saloniQuery->where('giorno_giovedi', true);
            break;
        case 'Friday':
            $saloniQuery->where('giorno_venerdi', true);
            break;
        case 'Saturday':
            $saloniQuery->where('giorno_sabato', true);
            break;
        case 'Sunday':
            $saloniQuery->where('giorno_domenica', true);
            break;
    }
}


if ($ordina == 'prezzo-alto') {
    $saloniQuery->orderBy('prezzo_depilazione_filo_orientale', 'desc'); // Ordinamento dal prezzo più alto al più basso
} elseif ($ordina == 'prezzo-basso') {
    $saloniQuery->orderBy('prezzo_depilazione_filo_orientale', 'asc'); // Ordinamento dal prezzo più basso al più alto
} elseif ($ordina == 'recente') {
    $saloniQuery->orderBy('created_at', 'desc'); // Ordinamento per data recente
} elseif ($ordina == 'valutazione-alta') {
    $saloniQuery->orderBy('valutazione', 'desc'); // Ordinamento per valutazione
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
                'immagini' => json_decode($salone->immagini),
                'prezzo_depilazione_filo_orientale' => $salone->prezzo_depilazione_filo_orientale
            ];
        }),
    ]);
}

return view('pages.viso.depilazione_con_filo_orientale_sopracciglia', [
    'saloni' => $saloni,
    'trattamento' => $trattamento,
    'data' => $data,
    'posizione' => $posizione,
    'servizi' => $servizi,
    'servizio_viso' => $servizio_viso,
    'title' => 'Depilazione con filo orientale sopracciglia'
]);
}

    public function depilazioneSopracciglia(Request $request)
    {

        $trattamento = $request->input('trattamento');
        $data = $request->input('data');
        $posizione = $request->input('posizione');
        $ordina = $request->input('ordina');

        $giorno = !empty($data) ? date('l', strtotime($data)) : null;
        $servizio_viso = $request->input('servizio_viso') ?? true;

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

        $saloniQuery->where('servizio_viso', 1);


        if (!empty($trattamento)) {
            $colonnaTrattamento = 'servizio_' . $trattamento;
            $saloniQuery->where($colonnaTrattamento, 1); // Filtra per il trattamento selezionato
        }

if (!empty($posizione)) {
    $saloniQuery->where('posizione', 'like', '%' . $posizione . '%'); // Filtra per la posizione selezionata
}

if ($giorno) {
    switch ($giorno) {
        case 'Monday':
            $saloniQuery->where('giorno_lunedi', true);
            break;
        case 'Tuesday':
            $saloniQuery->where('giorno_martedi', true);
            break;
        case 'Wednesday':
            $saloniQuery->where('giorno_mercoledi', true);
            break;
        case 'Thursday':
            $saloniQuery->where('giorno_giovedi', true);
            break;
        case 'Friday':
            $saloniQuery->where('giorno_venerdi', true);
            break;
        case 'Saturday':
            $saloniQuery->where('giorno_sabato', true);
            break;
        case 'Sunday':
            $saloniQuery->where('giorno_domenica', true);
            break;
    }
}


if ($ordina == 'prezzo-alto') {
    $saloniQuery->orderBy('prezzo_depilazione_sopracciglia', 'desc'); // Ordinamento dal prezzo più alto al più basso
} elseif ($ordina == 'prezzo-basso') {
    $saloniQuery->orderBy('prezzo_depilazione_sopracciglia', 'asc'); // Ordinamento dal prezzo più basso al più alto
} elseif ($ordina == 'recente') {
    $saloniQuery->orderBy('created_at', 'desc'); // Ordinamento per data recente
} elseif ($ordina == 'valutazione-alta') {
    $saloniQuery->orderBy('valutazione', 'desc'); // Ordinamento per valutazione
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
                'immagini' => json_decode($salone->immagini),
                'prezzo_depilazione_sopracciglia' => $salone->prezzo_depilazione_sopracciglia
            ];
        }),
    ]);
}

return view('pages.viso.depilazione_sopracciglia', [
    'saloni' => $saloni,
    'trattamento' => $trattamento,
    'data' => $data,
    'posizione' => $posizione,
    'servizi' => $servizi,
    'servizio_viso' => $servizio_viso,
    'title' => 'Depilazione sopracciglia'
]);
}

    public function extensionCiglia(Request $request)
    {

        $trattamento = $request->input('trattamento');
        $data = $request->input('data');
        $posizione = $request->input('posizione');
        $ordina = $request->input('ordina');

        $giorno = !empty($data) ? date('l', strtotime($data)) : null;
        $servizio_viso = $request->input('servizio_viso') ?? true;


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

        $saloniQuery->where('servizio_viso', 1);

        if (!empty($trattamento)) {
            $colonnaTrattamento = 'servizio_' . $trattamento;
            $saloniQuery->where($colonnaTrattamento, 1); // Filtra per il trattamento selezionato
        }

if (!empty($posizione)) {
    $saloniQuery->where('posizione', 'like', '%' . $posizione . '%'); // Filtra per la posizione selezionata
}

if ($giorno) {
    switch ($giorno) {
        case 'Monday':
            $saloniQuery->where('giorno_lunedi', true);
            break;
        case 'Tuesday':
            $saloniQuery->where('giorno_martedi', true);
            break;
        case 'Wednesday':
            $saloniQuery->where('giorno_mercoledi', true);
            break;
        case 'Thursday':
            $saloniQuery->where('giorno_giovedi', true);
            break;
        case 'Friday':
            $saloniQuery->where('giorno_venerdi', true);
            break;
        case 'Saturday':
            $saloniQuery->where('giorno_sabato', true);
            break;
        case 'Sunday':
            $saloniQuery->where('giorno_domenica', true);
            break;
    }
}



if ($ordina == 'prezzo-alto') {
    $saloniQuery->orderBy('prezzo_extension_ciglia', 'desc'); // Ordinamento dal prezzo più alto al più basso
} elseif ($ordina == 'prezzo-basso') {
    $saloniQuery->orderBy('prezzo_extension_ciglia', 'asc'); // Ordinamento dal prezzo più basso al più alto
} elseif ($ordina == 'recente') {
    $saloniQuery->orderBy('created_at', 'desc'); // Ordinamento per data recente
} elseif ($ordina == 'valutazione-alta') {
    $saloniQuery->orderBy('valutazione', 'desc'); // Ordinamento per valutazione
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
                'immagini' => json_decode($salone->immagini),
                'prezzo_extension_ciglia' => $salone->prezzo_extension_ciglia
            ];
        }),
    ]);
}

return view('pages.viso.extension_ciglia', [
    'saloni' => $saloni,
    'trattamento' => $trattamento,
    'data' => $data,
    'posizione' => $posizione,
    'servizi' => $servizi,
    'servizio_viso' => $servizio_viso,
    'title' => 'Extension ciglia'
]);
}


    public function trattamentiViso(Request $request)
    {

        $trattamento = $request->input('trattamento');
        $data = $request->input('data');
        $posizione = $request->input('posizione');
        $ordina = $request->input('ordina');

        $giorno = !empty($data) ? date('l', strtotime($data)) : null;
        $servizio_viso = $request->input('servizio_viso') ?? true;


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

        $saloniQuery->where('servizio_viso', 1);

        if (!empty($trattamento)) {
            $colonnaTrattamento = 'servizio_' . $trattamento;
            $saloniQuery->where($colonnaTrattamento, 1); // Filtra per il trattamento selezionato
        }

if (!empty($posizione)) {
    $saloniQuery->where('posizione', 'like', '%' . $posizione . '%'); // Filtra per la posizione selezionata
}

if ($giorno) {
    switch ($giorno) {
        case 'Monday':
            $saloniQuery->where('giorno_lunedi', true);
            break;
        case 'Tuesday':
            $saloniQuery->where('giorno_martedi', true);
            break;
        case 'Wednesday':
            $saloniQuery->where('giorno_mercoledi', true);
            break;
        case 'Thursday':
            $saloniQuery->where('giorno_giovedi', true);
            break;
        case 'Friday':
            $saloniQuery->where('giorno_venerdi', true);
            break;
        case 'Saturday':
            $saloniQuery->where('giorno_sabato', true);
            break;
        case 'Sunday':
            $saloniQuery->where('giorno_domenica', true);
            break;
    }
}


if ($ordina == 'prezzo-alto') {
    $saloniQuery->orderBy('prezzo_trattamenti_viso', 'desc'); // Ordinamento dal prezzo più alto al più basso
} elseif ($ordina == 'prezzo-basso') {
    $saloniQuery->orderBy('prezzo_trattamenti_viso', 'asc'); // Ordinamento dal prezzo più basso al più alto
} elseif ($ordina == 'recente') {
    $saloniQuery->orderBy('created_at', 'desc'); // Ordinamento per data recente
} elseif ($ordina == 'valutazione-alta') {
    $saloniQuery->orderBy('valutazione', 'desc'); // Ordinamento per valutazione
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
                'immagini' => json_decode($salone->immagini),
                'prezzo_trattamenti_viso' => $salone->prezzo_trattamenti_viso
            ];
        }),
    ]);
}


return view('pages.viso.trattamenti_viso', [
    'saloni' => $saloni,
    'trattamento' => $trattamento,
    'data' => $data,
    'posizione' => $posizione,
    'servizi' => $servizi,
    'servizio_viso' => $servizio_viso,
    'title' => 'Trattamenti viso'
]);
}

}
