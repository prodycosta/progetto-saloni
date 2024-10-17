<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salone;

class DepilazioneController extends Controller
{
    public function index()
    {
        return view('depilazione');
    }
    public function cerettaBracciaOAscelle(Request $request)
    {
        $trattamento = $request->input('trattamento');
        $data = $request->input('data');
        $posizione = $request->input('posizione');

        $ordina = $request->input('ordina');

        $giorno = !empty($data) ? date('l', strtotime($data)) : null;
        $servizio_depilazione = $request->input('servizio_depilazione') ?? true;

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

        $saloniQuery->where('servizio_depilazione', 1);

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
    $saloniQuery->orderBy('prezzo_ceretta_braccia_ascelle', 'desc'); // Ordinamento dal prezzo più alto al più basso
} elseif ($ordina == 'prezzo-basso') {
    $saloniQuery->orderBy('prezzo_ceretta_braccia_ascelle', 'asc'); // Ordinamento dal prezzo più basso al più alto
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
                'prezzo_ceretta_braccia_ascelle' => $salone->prezzo_ceretta_braccia_ascelle
            ];
        }),
    ]);
}

return view('pages.depilazione.ceretta_braccia_o_ascelle', [
    'saloni' => $saloni,
    'trattamento' => $trattamento,
    'data' => $data,
    'posizione' => $posizione,
    'servizi' => $servizi,
    'servizio_depilazione' => $servizio_depilazione,
    'title' => 'Ceretta braccia o ascelle'
]);
}


    public function cerettaCorpo(Request $request)
    {
        $trattamento = $request->input('trattamento');
        $data = $request->input('data');
        $posizione = $request->input('posizione');
        $ordina = $request->input('ordina');

        $giorno = !empty($data) ? date('l', strtotime($data)) : null;
        $servizio_depilazione = $request->input('servizio_depilazione') ?? true;

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

        $saloniQuery->where('servizio_depilazione', 1);

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
    $saloniQuery->orderBy('prezzo_ceretta_corpo', 'desc'); // Ordinamento dal prezzo più alto al più basso
} elseif ($ordina == 'prezzo-basso') {
    $saloniQuery->orderBy('prezzo_ceretta_corpo', 'asc'); // Ordinamento dal prezzo più basso al più alto
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
                'prezzo_ceretta_corpo' => $salone->prezzo_ceretta_corpo
            ];
        }),
    ]);
}

        return view('pages.depilazione.ceretta_corpo', [
            'saloni' => $saloni,
            'trattamento' => $trattamento,
            'data' => $data,
            'posizione' => $posizione,
            'servizi' => $servizi,
            'servizio_depilazione' => $servizio_depilazione,
            'title' => 'Ceretta corpo'
        ]);
    }


    public function cerettaGambe(Request $request)
    {
        $trattamento = $request->input('trattamento');
        $data = $request->input('data');
        $posizione = $request->input('posizione');

        $ordina = $request->input('ordina');

        $giorno = !empty($data) ? date('l', strtotime($data)) : null;
        $servizio_depilazione = $request->input('servizio_depilazione') ?? true;


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

        $saloniQuery->where('servizio_depilazione', 1);

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
    $saloniQuery->orderBy('prezzo_ceretta_gambe', 'desc'); // Ordinamento dal prezzo più alto al più basso
} elseif ($ordina == 'prezzo-basso') {
    $saloniQuery->orderBy('prezzo_ceretta_gambe', 'asc'); // Ordinamento dal prezzo più basso al più alto
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
                'prezzo_ceretta_gambe' => $salone->prezzo_ceretta_gambe
            ];
        }),
    ]);
}

        return view('pages.depilazione.ceretta_gambe', [
            'saloni' => $saloni,
            'trattamento' => $trattamento,
            'data' => $data,
            'posizione' => $posizione,
            'servizi' => $servizi,
            'servizio_depilazione' => $servizio_depilazione,
            'title' => 'Ceretta gambe'
        ]);
    }


    public function cerettaInguineParziale(Request $request)
    {
        $trattamento = $request->input('trattamento');
        $data = $request->input('data');
        $posizione = $request->input('posizione');
        $ordina = $request->input('ordina');

        $giorno = !empty($data) ? date('l', strtotime($data)) : null;
        $servizio_depilazione = $request->input('servizio_depilazione') ?? true;


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

        $saloniQuery->where('servizio_depilazione', 1);

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
    $saloniQuery->orderBy('prezzo_ceretta_ing_parziale', 'desc'); // Ordinamento dal prezzo più alto al più basso
} elseif ($ordina == 'prezzo-basso') {
    $saloniQuery->orderBy('prezzo_ceretta_ing_parziale', 'asc'); // Ordinamento dal prezzo più basso al più alto
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
                'prezzo_ceretta_ing_parziale' => $salone->prezzo_ceretta_ing_parziale
            ];
        }),
    ]);
}

        return view('pages.depilazione.ceretta_inguine_parziale', [
            'saloni' => $saloni,
            'trattamento' => $trattamento,
            'data' => $data,
            'posizione' => $posizione,
            'servizi' => $servizi,
            'servizio_depilazione' => $servizio_depilazione,
            'title' => 'Ceretta inguine parziale'
        ]);
    }


    public function cerettaInguineTotale(Request $request)
    {
        $trattamento = $request->input('trattamento');
        $data = $request->input('data');
        $posizione = $request->input('posizione');
        $ordina = $request->input('ordina');

        $giorno = !empty($data) ? date('l', strtotime($data)) : null;
        $servizio_depilazione = $request->input('servizio_depilazione') ?? true;


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

        $saloniQuery->where('servizio_depilazione', 1);

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
    $saloniQuery->orderBy('prezzo_ceretta_ing_totale', 'desc'); // Ordinamento dal prezzo più alto al più basso
} elseif ($ordina == 'prezzo-basso') {
    $saloniQuery->orderBy('prezzo_ceretta_ing_totale', 'asc'); // Ordinamento dal prezzo più basso al più alto
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
                'prezzo_ceretta_ing_totale' => $salone->prezzo_ceretta_ing_totale
            ];
        }),
    ]);
}

        return view('pages.depilazione.ceretta_inguine_totale', [
            'saloni' => $saloni,
            'trattamento' => $trattamento,
            'data' => $data,
            'posizione' => $posizione,
            'servizi' => $servizi,
            'servizio_depilazione' => $servizio_depilazione,
            'title' => 'Ceretta inguine totale'
        ]);
    }


    public function cerettaViso(Request $request)
    {
        $trattamento = $request->input('trattamento');
        $data = $request->input('data');
        $posizione = $request->input('posizione');
        $ordina = $request->input('ordina');

        $giorno = !empty($data) ? date('l', strtotime($data)) : null;
        $servizio_depilazione = $request->input('servizio_depilazione') ?? true;


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

        $saloniQuery->where('servizio_depilazione', 1);

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
    $saloniQuery->orderBy('prezzo_ceretta_viso', 'desc'); // Ordinamento dal prezzo più alto al più basso
} elseif ($ordina == 'prezzo-basso') {
    $saloniQuery->orderBy('prezzo_ceretta_viso', 'asc'); // Ordinamento dal prezzo più basso al più alto
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
                'prezzo_ceretta_viso' => $salone->prezzo_ceretta_viso
            ];
        }),
    ]);
}

        return view('pages.depilazione.ceretta_viso', [
            'saloni' => $saloni,
            'trattamento' => $trattamento,
            'data' => $data,
            'posizione' => $posizione,
            'servizi' => $servizi,
            'servizio_depilazione' => $servizio_depilazione,
            'title' => 'Ceretta viso'
        ]);
    }

}
