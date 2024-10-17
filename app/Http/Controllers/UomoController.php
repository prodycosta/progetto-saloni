<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salone;

class UomoController extends Controller
{
    public function index()
    {
        return view('uomo');
    }
    public function barbiere(Request $request)
    {
        $trattamento = $request->input('trattamento');
        $data = $request->input('data');
        $posizione = $request->input('posizione');
        $ordina = $request->input('ordina');

        $giorno = !empty($data) ? date('l', strtotime($data)) : null;
        $servizio_uomo = $request->input('servizio_uomo') ?? true;


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

        $saloniQuery->where('servizio_uomo', 1);

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
    $saloniQuery->orderBy('prezzo_barbiere', 'desc'); // Ordinamento dal prezzo più alto al più basso
} elseif ($ordina == 'prezzo-basso') {
    $saloniQuery->orderBy('prezzo_barbiere', 'asc'); // Ordinamento dal prezzo più basso al più alto
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
                'prezzo_barbiere' => $salone->prezzo_barbiere
            ];
        }),
    ]);
}

        return view('pages.uomo.barbiere', [
            'saloni' => $saloni,
            'trattamento' => $trattamento,
            'data' => $data,
            'posizione' => $posizione,
            'servizi' => $servizi,
            'servizio_uomo' => $servizio_uomo,
            'title' => 'Barbiere'
        ]);
    }


    public function coloreUomo(Request $request)
    {
        $trattamento = $request->input('trattamento');
        $data = $request->input('data');
        $posizione = $request->input('posizione');
        $ordina = $request->input('ordina');

        $giorno = !empty($data) ? date('l', strtotime($data)) : null;
        $servizio_uomo = $request->input('servizio_uomo') ?? true;


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

        $saloniQuery->where('servizio_uomo', 1);

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
    $saloniQuery->orderBy('prezzo_colore_uomo', 'desc'); // Ordinamento dal prezzo più alto al più basso
} elseif ($ordina == 'prezzo-basso') {
    $saloniQuery->orderBy('prezzo_colore_uomo', 'asc'); // Ordinamento dal prezzo più basso al più alto
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
                'prezzo_colore_uomo' => $salone->prezzo_colore_uomo
            ];
        }),
    ]);
}

        return view('pages.uomo.colore_uomo', [
            'saloni' => $saloni,
            'trattamento' => $trattamento,
            'data' => $data,
            'posizione' => $posizione,
            'servizi' => $servizi,
            'servizio_uomo' => $servizio_uomo,
            'title' => 'Colore uomo'
        ]);
    }


    public function depilazioneUomo(Request $request)
    {
        $trattamento = $request->input('trattamento');
        $data = $request->input('data');
        $posizione = $request->input('posizione');
        $ordina = $request->input('ordina');

        $giorno = !empty($data) ? date('l', strtotime($data)) : null;
        $servizio_uomo = $request->input('servizio_uomo') ?? true;


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

        $saloniQuery->where('servizio_uomo', 1);

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
    $saloniQuery->orderBy('prezzo_depilazione_uomo', 'desc'); // Ordinamento dal prezzo più alto al più basso
} elseif ($ordina == 'prezzo-basso') {
    $saloniQuery->orderBy('prezzo_depilazione_uomo', 'asc'); // Ordinamento dal prezzo più basso al più alto
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
                'prezzo_colore_uomo' => $salone->prezzo_colore_uomo
            ];
        }),
    ]);
}

        return view('pages.uomo.depilazione_uomo', [
            'saloni' => $saloni,
            'trattamento' => $trattamento,
            'data' => $data,
            'posizione' => $posizione,
            'servizi' => $servizi,
            'servizio_uomo' => $servizio_uomo,
            'title' => 'Depilazione uomo'
        ]);
    }


    public function taglioBarba(Request $request)
    {
        $trattamento = $request->input('trattamento');
        $data = $request->input('data');
        $posizione = $request->input('posizione');

        $ordina = $request->input('ordina');

        $giorno = !empty($data) ? date('l', strtotime($data)) : null;
        $servizio_uomo = $request->input('servizio_uomo') ?? true;


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

        $saloniQuery->where('servizio_uomo', 1);

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
    $saloniQuery->orderBy('prezzo_taglio_barba', 'desc'); // Ordinamento dal prezzo più alto al più basso
} elseif ($ordina == 'prezzo-basso') {
    $saloniQuery->orderBy('prezzo_taglio_barba', 'asc'); // Ordinamento dal prezzo più basso al più alto
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
                'prezzo_taglio_barba' => $salone->prezzo_taglio_barba
            ];
        }),
    ]);
}

        return view('pages.uomo.taglio_barba', [
            'saloni' => $saloni,
            'trattamento' => $trattamento,
            'data' => $data,
            'posizione' => $posizione,
            'servizi' => $servizi,
            'servizio_uomo' => $servizio_uomo,
            'title' => 'Taglio barba'
        ]);
    }


    public function trattamentiVisoUomo(Request $request)
    {
        $trattamento = $request->input('trattamento');
        $data = $request->input('data');
        $posizione = $request->input('posizione');

        $ordina = $request->input('ordina');

        $giorno = !empty($data) ? date('l', strtotime($data)) : null;
        $servizio_uomo = $request->input('servizio_uomo') ?? true;


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

        $saloniQuery->where('servizio_uomo', 1);

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
    $saloniQuery->orderBy('prezzo_trattamenti_viso_uomo', 'desc'); // Ordinamento dal prezzo più alto al più basso
} elseif ($ordina == 'prezzo-basso') {
    $saloniQuery->orderBy('prezzo_trattamenti_viso_uomo', 'asc'); // Ordinamento dal prezzo più basso al più alto
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
                'prezzo_trattamenti_viso_uomo' => $salone->prezzo_trattamenti_viso_uomo
            ];
        }),
    ]);
}

        return view('pages.uomo.trattamenti_viso_uomo', [
            'saloni' => $saloni,
            'trattamento' => $trattamento,
            'data' => $data,
            'posizione' => $posizione,
            'servizi' => $servizi,
            'servizio_uomo' => $servizio_uomo,
            'title' => 'Trattamenti viso uomo'
        ]);
    }

}
