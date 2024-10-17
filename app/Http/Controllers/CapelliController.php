<?php

namespace App\Http\Controllers;

use App\Models\Salone;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Response;

class CapelliController extends Controller
{
    public function index()
    {
        return view('capelli');
    }

    public function colpiDiSole(Request $request)
    {
        $trattamento = $request->input('trattamento');
        $data = $request->input('data');
        $posizione = $request->input('posizione');
        $ordina = $request->input('ordina');

        $giorno = !empty($data) ? date('l', strtotime($data)) : null;
        $servizio_capelli = $request->input('servizio_capelli') ?? true;

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

        $saloniQuery->where('servizio_capelli', 1);


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
    $saloniQuery->orderBy('prezzo_colpi_di_sole', 'desc'); // Ordinamento dal prezzo più alto al più basso
} elseif ($ordina == 'prezzo-basso') {
    $saloniQuery->orderBy('prezzo_colpi_di_sole', 'asc'); // Ordinamento dal prezzo più basso al più alto
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
                'prezzo_colpi_di_sole' => $salone->prezzo_colpi_di_sole
            ];
        }),
    ]);
}

return view('pages.capelli.colpi_di_sole', [
    'saloni' => $saloni,
    'trattamento' => $trattamento,
    'data' => $data,
    'posizione' => $posizione,
    'servizi' => $servizi,
    'servizio_capelli' => $servizio_capelli,
    'title' => 'Colpi di sole'
]);
}


public function piega(Request $request)
{
    $trattamento = $request->input('trattamento');
    $data = $request->input('data');
    $posizione = $request->input('posizione');
    $ordina = $request->input('ordina'); // Ottieni l'opzione di ordinamento

    // Calcola il giorno della settimana dalla data selezionata
    $giorno = !empty($data) ? date('l', strtotime($data)) : null;

    // Filtra sempre per servizio capelli (deve essere 1)
    $servizio_capelli = $request->input('servizio_capelli') ?? true;

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

    // Filtra per servizio capelli (assicurati che i saloni abbiano questo servizio attivo)
    $saloniQuery->where('servizio_capelli', 1); // Mostra solo saloni con servizio capelli attivo

    // Filtra per trattamento se presente
    if (!empty($trattamento)) {
        $colonnaTrattamento = 'servizio_' . $trattamento;
        $saloniQuery->where($colonnaTrattamento, 1); // Filtra per il trattamento selezionato
    }

    // Filtra per posizione se presente
    if (!empty($posizione)) {
        $saloniQuery->where('posizione', 'like', '%' . $posizione . '%'); // Filtra per la posizione selezionata
    }

    // Filtra per il giorno della settimana se la data è stata selezionata
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

    // Aggiungi l'ordinamento per prezzo o valutazione
    if ($ordina == 'prezzo-alto') {
        $saloniQuery->orderBy('prezzo_piega', 'desc'); // Ordinamento dal prezzo più alto al più basso
    } elseif ($ordina == 'prezzo-basso') {
        $saloniQuery->orderBy('prezzo_piega', 'asc'); // Ordinamento dal prezzo più basso al più alto
    } elseif ($ordina == 'recente') {
        $saloniQuery->orderBy('created_at', 'desc'); // Ordinamento per data recente
    } elseif ($ordina == 'valutazione-alta') {
        $saloniQuery->orderBy('valutazione', 'desc'); // Ordinamento per valutazione
    }

    // Esegui la query per ottenere i saloni filtrati
    $saloni = $saloniQuery->get();

    // Se è una richiesta AJAX, restituisci i saloni in formato JSON
    if ($request->ajax()) {
        return response()->json([
            'saloni' => $saloni->map(function ($salone) {
                return [
                    'id' => $salone->id,
                    'nome_salone' => $salone->nome_salone,
                    'posizione' => $salone->posizione,
                    'numero_telefono' => $salone->numero_telefono,
                    'immagini' => json_decode($salone->immagini),
                    'prezzo_piega' => $salone->prezzo_piega // Include il prezzo per il rendering
                ];
            }),
        ]);
    }

    // Altrimenti restituisci la vista con i saloni filtrati
    return view('pages.capelli.piega', [
        'saloni' => $saloni,
        'trattamento' => $trattamento,
        'data' => $data,
        'posizione' => $posizione,
        'servizi' => $servizi,
        'servizio_capelli' => $servizio_capelli,
        'title' => 'Piega',
    ]);
}

    public function taglioDonna(Request $request)
    {
        $trattamento = $request->input('trattamento');
        $data = $request->input('data');
        $posizione = $request->input('posizione');
        $ordina = $request->input('ordina'); // Ottieni l'opzione di ordinamento
        $giorno = !empty($data) ? date('l', strtotime($data)) : null;
        $servizio_capelli = $request->input('servizio_capelli') ?? true;


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

        $saloniQuery->where('servizio_capelli', 1); // Mostra solo saloni con servizio capelli attivo

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
    $saloniQuery->orderBy('prezzo_taglio_donna', 'desc'); // Ordinamento dal prezzo più alto al più basso
} elseif ($ordina == 'prezzo-basso') {
    $saloniQuery->orderBy('prezzo_taglio_donna', 'asc'); // Ordinamento dal prezzo più basso al più alto
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
                'prezzo_taglio_donna' => $salone->prezzo_taglio_donna
            ];
        }),
    ]);
}

return view('pages.capelli.taglio_donna', [
    'saloni' => $saloni,
    'trattamento' => $trattamento,
    'data' => $data,
    'posizione' => $posizione,
    'servizi' => $servizi,
    'servizio_capelli' => $servizio_capelli,
    'title' => 'Taglio donna'
]);
}


    public function taglioEPiegaDonna(Request $request)
    {
        $trattamento = $request->input('trattamento');
        $data = $request->input('data');
        $posizione = $request->input('posizione');
        $ordina = $request->input('ordina');
        $giorno = !empty($data) ? date('l', strtotime($data)) : null;
        $servizio_capelli = $request->input('servizio_capelli') ?? true;


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

        $saloniQuery->where('servizio_capelli', 1);

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
    $saloniQuery->orderBy('prezzo_taglio_piega_donna', 'desc'); // Ordinamento dal prezzo più alto al più basso
} elseif ($ordina == 'prezzo-basso') {
    $saloniQuery->orderBy('prezzo_taglio_piega_donna', 'asc'); // Ordinamento dal prezzo più basso al più alto
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
                'prezzo_taglio_piega_donna' => $salone->prezzo_taglio_piega_donna
            ];
        }),
    ]);
}

return view('pages.capelli.taglio_e_piega_donna', [
    'saloni' => $saloni,
    'trattamento' => $trattamento,
    'data' => $data,
    'posizione' => $posizione,
    'servizi' => $servizi,
    'servizio_capelli' => $servizio_capelli,
    'title' => 'Taglio e piega donna'
]);
}


    public function taglioUomo(Request $request)
    {
        $trattamento = $request->input('trattamento');
        $data = $request->input('data');
        $posizione = $request->input('posizione');
        $ordina = $request->input('ordina');

        $giorno = !empty($data) ? date('l', strtotime($data)) : null;
        $servizio_capelli = $request->input('servizio_capelli') ?? true;
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

        $saloniQuery->where('servizio_capelli', 1);

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
    $saloniQuery->orderBy('prezzo_taglio_uomo', 'desc'); // Ordinamento dal prezzo più alto al più basso
} elseif ($ordina == 'prezzo-basso') {
    $saloniQuery->orderBy('prezzo_taglio_uomo', 'asc'); // Ordinamento dal prezzo più basso al più alto
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
                'prezzo_taglio_uomo' => $salone->prezzo_taglio_uomo
            ];
        }),
    ]);
}

return view('pages.capelli.taglio_uomo', [
    'saloni' => $saloni,
    'trattamento' => $trattamento,
    'data' => $data,
    'posizione' => $posizione,
    'servizi' => $servizi,
    'servizio_capelli' => $servizio_capelli,
    'title' => 'Taglio uomo'
]);
}


    public function trattamentiCapelliSpecifici(Request $request)
    {
        $trattamento = $request->input('trattamento');
        $data = $request->input('data');
        $posizione = $request->input('posizione');
        $ordina = $request->input('ordina');
        $giorno = !empty($data) ? date('l', strtotime($data)) : null;
        $servizio_capelli = $request->input('servizio_capelli') ?? true;
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
    $saloniQuery->orderBy('prezzo_trattamenti_capelli', 'desc'); // Ordinamento dal prezzo più alto al più basso
} elseif ($ordina == 'prezzo-basso') {
    $saloniQuery->orderBy('prezzo_trattamenti_capelli', 'asc'); // Ordinamento dal prezzo più basso al più alto
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
                'prezzo_trattamenti_capelli' => $salone->prezzo_trattamenti_capelli
            ];
        }),
    ]);
}

return view('pages.capelli.trattamenti_capelli_specifici', [
    'saloni' => $saloni,
    'trattamento' => $trattamento,
    'data' => $data,
    'posizione' => $posizione,
    'servizi' => $servizi,
    'servizio_capelli' => $servizio_capelli,
    'title' => 'Trattamenti capelli specifici'
]);
    }
}

