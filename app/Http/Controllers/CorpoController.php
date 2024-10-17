<?php

namespace App\Http\Controllers;


use App\Models\Salone;
use Illuminate\Http\Request;

class CorpoController extends Controller
{
    public function index()
    {

        return view('corpo');
    }
    public function bendaggi(Request $request) {
        $trattamento = $request->input('trattamento');
        $data = $request->input('data');
        $posizione = $request->input('posizione');
        $ordina = $request->input('ordina');

        $giorno = !empty($data) ? date('l', strtotime($data)) : null;
        $servizio_corpo = $request->input('servizio_corpo') ?? true;


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

        $saloniQuery->where('servizio_corpo', 1);

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
    $saloniQuery->orderBy('prezzo_bendaggi', 'desc'); // Ordinamento dal prezzo più alto al più basso
} elseif ($ordina == 'prezzo-basso') {
    $saloniQuery->orderBy('prezzo_bendaggi', 'asc'); // Ordinamento dal prezzo più basso al più alto
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
                'prezzo_bendaggi' => $salone->prezzo_bendaggi
            ];
        }),
    ]);
}

        return view('pages.corpo.bendaggi', [
            'saloni' => $saloni,
            'trattamento' => $trattamento,
            'data' => $data,
            'posizione' => $posizione,
            'servizi' => $servizi,
            'servizio_corpo' => $servizio_corpo,
            'title' => 'Bendaggi'
        ]);
    }


    public function circuitoSpa(Request $request)
    {
        $trattamento = $request->input('trattamento');
        $data = $request->input('data');
        $posizione = $request->input('posizione');

        $ordina = $request->input('ordina');

        $giorno = !empty($data) ? date('l', strtotime($data)) : null;
        $servizio_corpo = $request->input('servizio_corpo') ?? true;


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

        $saloniQuery->where('servizio_corpo', 1);

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
    $saloniQuery->orderBy('prezzo_circuito_spa', 'desc'); // Ordinamento dal prezzo più alto al più basso
} elseif ($ordina == 'prezzo-basso') {
    $saloniQuery->orderBy('prezzo_circuito_spa', 'asc'); // Ordinamento dal prezzo più basso al più alto
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
                'prezzo_circuito_spa' => $salone->prezzo_circuito_spa
            ];
        }),
    ]);
}

        return view('pages.corpo.circuito_spa', [
            'saloni' => $saloni,
            'trattamento' => $trattamento,
            'data' => $data,
            'posizione' => $posizione,
            'servizi' => $servizi,
            'servizio_corpo' => $servizio_corpo,
            'title' => 'Circuito Spa'
        ]);
    }


    public function solarium(Request $request)
    {
        $trattamento = $request->input('trattamento');
        $data = $request->input('data');
        $posizione = $request->input('posizione');
        $ordina = $request->input('ordina');

        $giorno = !empty($data) ? date('l', strtotime($data)) : null;
        $servizio_corpo = $request->input('servizio_corpo') ?? true;


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

        $saloniQuery->where('servizio_corpo', 1);

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
    $saloniQuery->orderBy('prezzo_solarium', 'desc'); // Ordinamento dal prezzo più alto al più basso
} elseif ($ordina == 'prezzo-basso') {
    $saloniQuery->orderBy('prezzo_solarium', 'asc'); // Ordinamento dal prezzo più basso al più alto
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
                'prezzo_solarium' => $salone->prezzo_solarium
            ];
        }),
    ]);
}

        return view('pages.corpo.solarium', [
            'saloni' => $saloni,
            'trattamento' => $trattamento,
            'data' => $data,
            'posizione' => $posizione,
            'servizi' => $servizi,
            'servizio_corpo' => $servizio_corpo,
            'title' => 'Solarium'
        ]);
    }


    public function trattamentiAnticellulite(Request $request)
    {
        $trattamento = $request->input('trattamento');
        $data = $request->input('data');
        $posizione = $request->input('posizione');

        $ordina = $request->input('ordina');

        $giorno = !empty($data) ? date('l', strtotime($data)) : null;
        $servizio_corpo = $request->input('servizio_corpo') ?? true;


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

        $saloniQuery->where('servizio_corpo', 1);

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
    $saloniQuery->orderBy('prezzo_trattamenti_anticellulite', 'desc'); // Ordinamento dal prezzo più alto al più basso
} elseif ($ordina == 'prezzo-basso') {
    $saloniQuery->orderBy('prezzo_trattamenti_anticellulite', 'asc'); // Ordinamento dal prezzo più basso al più alto
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
                'prezzo_trattamenti_anticellulite' => $salone->prezzo_trattamenti_anticellulite
            ];
        }),
    ]);
}

        return view('pages.corpo.trattamenti_anticellulite', [
            'saloni' => $saloni,
            'trattamento' => $trattamento,
            'data' => $data,
            'posizione' => $posizione,
            'servizi' => $servizi,
            'servizio_corpo' => $servizio_corpo,
            'title' => 'Trattamenti Anticellulite'
        ]);
    }


    public function trattamentiDimagranti(Request $request)
    {
        $trattamento = $request->input('trattamento');
        $data = $request->input('data');
        $posizione = $request->input('posizione');
        $ordina = $request->input('ordina');

        $giorno = !empty($data) ? date('l', strtotime($data)) : null;
        $servizio_corpo = $request->input('servizio_corpo') ?? true;


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

        $saloniQuery->where('servizio_corpo', 1);

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
    $saloniQuery->orderBy('prezzo_trattamenti_dimagranti', 'desc'); // Ordinamento dal prezzo più alto al più basso
} elseif ($ordina == 'prezzo-basso') {
    $saloniQuery->orderBy('prezzo_trattamenti_dimagranti', 'asc'); // Ordinamento dal prezzo più basso al più alto
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
                'prezzo_trattamenti_dimagranti' => $salone->prezzo_trattamenti_dimagranti
            ];
        }),
    ]);
}

        return view('pages.corpo.trattamenti_dimagranti', [
            'saloni' => $saloni,
            'trattamento' => $trattamento,
            'data' => $data,
            'posizione' => $posizione,
            'servizi' => $servizi,
            'servizio_corpo' => $servizio_corpo,
            'title' => 'Trattamenti dimagranti'
        ]);
    }

}
