<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salone;
use Intervention\Image\Facades\Image;
use App\Models\Recensione;



class SaloneController extends Controller
{
    public function create()
    {
        return view('pages.aggiungi_salone');
    }

    public function show($id)
{
    $salone = Salone::findOrFail($id);
    $recensioni = Recensione::where('salone_id', $id)
        ->orderBy('data_recensione', 'desc')  // Ordina per data decrescente
        ->take(5)  // Limita a 5 recensioni
        ->get();
    $immagini = json_decode($salone->immagini);

    return view('pages.salone.show', [
        'salone' => $salone,
        'immagini' => $immagini,
        'recensioni' => $recensioni,
    ]);
}

    public function store(Request $request){
    $request->validate([
        'nome_salone' => 'required|string|max:255',
        'posizione' => 'required|string|max:255',
        'numero_civico' => 'required|string|max:10',
        'nome_proprietario' => 'required|string|max:255',
        'cognome_proprietario' => 'required|string|max:255',
        'email' => 'required|email',
        'numero_telefono' => 'required|string|max:255',
        'servizio_capelli' => 'nullable|boolean',
        'servizio_depilazione' => 'nullable|boolean',
        'servizio_unghie' => 'nullable|boolean',
        'servizio_corpo' => 'nullable|boolean',
        'servizio_uomo' => 'nullable|boolean',
        'servizio_viso' => 'nullable|boolean',
        'servizio_massaggio' => 'nullable|boolean',
        'prezzo_piega' => 'nullable|numeric',
        'prezzo_taglio_donna' => 'nullable|numeric',
        'prezzo_taglio_uomo' => 'nullable|numeric',
        'prezzo_colpi_di_sole' => 'nullable|numeric',
        'prezzo_trattamenti_capelli' => 'nullable|numeric',
        'prezzo_taglio_piega_donna' => 'nullable|numeric',
        'prezzo_trattamenti_viso' => 'nullable|numeric',
        'prezzo_depilazione_sopracciglia' => 'nullable|numeric',
        'prezzo_extension_ciglia' => 'nullable|numeric',
        'prezzo_permanente_ciglia' => 'nullable|numeric',
        'prezzo_colorazione_ciglia_sopracciglia' => 'nullable|numeric',
        'prezzo_depilazione_filo_orientale' => 'nullable|numeric',
        'prezzo_manicure_semipermanente' => 'nullable|numeric',
        'prezzo_manicure' => 'nullable|numeric',
        'prezzo_pedicure' => 'nullable|numeric',
        'prezzo_rimozione_gel' => 'nullable|numeric',
        'prezzo_pedicure_semipermanente' => 'nullable|numeric',
        'prezzo_callus_peeling' => 'nullable|numeric',
        'prezzo_ceretta_corpo' => 'nullable|numeric',
        'prezzo_ceretta_viso' => 'nullable|numeric',
        'prezzo_ceretta_ing_parziale' => 'nullable|numeric',
        'prezzo_ceretta_gambe' => 'nullable|numeric',
        'prezzo_ceretta_braccia_ascelle' => 'nullable|numeric',
        'prezzo_ceretta_ing_totale' => 'nullable|numeric',
        'prezzo_massaggio_rilassante' => 'nullable|numeric',
        'prezzo_massaggio_drenante' => 'nullable|numeric',
        'prezzo_massaggio_decontratturante' => 'nullable|numeric',
        'prezzo_pressoterapia' => 'nullable|numeric',
        'prezzo_massaggio_tailandese' => 'nullable|numeric',
        'prezzo_massaggio_viso' => 'nullable|numeric',
        'prezzo_colore_uomo' => 'nullable|numeric',
        'prezzo_taglio_barba' => 'nullable|numeric',
        'prezzo_trattamenti_viso_uomo' => 'nullable|numeric',
        'prezzo_barbiere' => 'nullable|numeric',
        'prezzo_depilazione_uomo' => 'nullable|numeric',
        'prezzo_solarium' => 'nullable|numeric',
        'prezzo_trattamenti_anticellulite' => 'nullable|numeric',
        'prezzo_trattamenti_dimagranti' => 'nullable|numeric',
        'prezzo_bendaggi' => 'nullable|numeric',
        'prezzo_circuito_spa' => 'nullable|numeric',
        'orario_apertura' => 'required|date_format:H:i',
            'orario_chiusura' => 'required|date_format:H:i',
            'giorno_lunedi' => 'nullable|boolean',
            'giorno_martedi' => 'nullable|boolean',
            'giorno_mercoledi' => 'nullable|boolean',
            'giorno_giovedi' => 'nullable|boolean',
            'giorno_venerdi' => 'nullable|boolean',
            'giorno_sabato' => 'nullable|boolean',
            'giorno_domenica' => 'nullable|boolean',
            'saloni' => 'required|string|max:255',
            'trasporto' => 'required|string|max:255',
            'team' => 'required|string|max:255',
            'punti_forti' => 'required|string|max:255',
        'immagini.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:51200',
    ]);

    $immagini = [];
    if ($request->hasFile('immagini')) {
        foreach ($request->file('immagini') as $immagine) {
            // Generazione di un nome unico per l'immagine
            $nome_immagine = $immagine->getClientOriginalName() . '_' . time();

            // Salvataggio dell'immagine nella directory pubblica
            $percorso_immagine = $immagine->storeAs('immagini', $nome_immagine, 'public');

            // Aggiunta del percorso dell'immagine all'array
            $immagini[] = $percorso_immagine;
        }
    }

$immaginiJson = json_encode($immagini);


    $user_id = auth()->id();
    // Creazione di un nuovo salone nel database
    $salone = new Salone();
    $salone->user_id = $user_id;
    $salone->nome_salone = $request->input('nome_salone');
    $salone->posizione = $request->input('posizione');
    $salone->numero_civico = $request->input('numero_civico');
    $salone->nome_proprietario = $request->input('nome_proprietario');
    $salone->cognome_proprietario = $request->input('cognome_proprietario');
    $salone->email = $request->input('email');
    $salone->numero_telefono = $request->input('numero_telefono');
    $salone->servizio_capelli = $request->input('servizio_capelli') ?? false;
    $salone->servizio_depilazione = $request->input('servizio_depilazione') ?? false;
    $salone->servizio_unghie = $request->input('servizio_unghie') ?? false;
    $salone->servizio_corpo = $request->input('servizio_corpo') ?? false;
    $salone->servizio_uomo = $request->input('servizio_uomo') ?? false;
    $salone->servizio_massaggio = $request->input('servizio_massaggio') ?? false;
    $salone->servizio_viso = $request->input('servizio_viso') ?? false;
    $salone->prezzo_piega = $request->input('prezzo_piega');
    $salone->prezzo_taglio_donna = $request->input('prezzo_taglio_donna');
    $salone->prezzo_taglio_uomo = $request->input('prezzo_taglio_uomo');
    $salone->prezzo_colpi_di_sole = $request->input('prezzo_colpi_di_sole');
    $salone->prezzo_trattamenti_capelli = $request->input('prezzo_trattamenti_capelli');
    $salone->prezzo_taglio_piega_donna = $request->input('prezzo_taglio_piega_donna');
    $salone->prezzo_trattamenti_viso = $request->input('prezzo_trattamenti_viso');
    $salone->prezzo_depilazione_sopracciglia = $request->input('prezzo_depilazione_sopracciglia');
    $salone->prezzo_extension_ciglia = $request->input('prezzo_extension_ciglia');
    $salone->prezzo_permanente_ciglia = $request->input('prezzo_permanente_ciglia');
    $salone->prezzo_colorazione_ciglia_sopracciglia = $request->input('prezzo_colorazione_ciglia_sopracciglia');
    $salone->prezzo_depilazione_filo_orientale = $request->input('prezzo_depilazione_filo_orientale');
    $salone->prezzo_manicure_semipermanente = $request->input('prezzo_manicure_semipermanente');
    $salone->prezzo_manicure = $request->input('prezzo_manicure');
    $salone->prezzo_pedicure = $request->input('prezzo_pedicure');
    $salone->prezzo_rimozione_gel = $request->input('prezzo_rimozione_gel');
    $salone->prezzo_pedicure_semipermanente = $request->input('prezzo_pedicure_semipermanente');
    $salone->prezzo_callus_peeling = $request->input('prezzo_callus_peeling');
    $salone->prezzo_ceretta_corpo = $request->input('prezzo_ceretta_corpo');
    $salone->prezzo_ceretta_viso = $request->input('prezzo_ceretta_viso');
    $salone->prezzo_ceretta_ing_parziale = $request->input('prezzo_ceretta_ing_parziale');
    $salone->prezzo_ceretta_gambe = $request->input('prezzo_ceretta_gambe');
    $salone->prezzo_ceretta_braccia_ascelle = $request->input('prezzo_ceretta_braccia_ascelle');
    $salone->prezzo_ceretta_ing_totale = $request->input('prezzo_ceretta_ing_totale');
    $salone->prezzo_massaggio_rilassante = $request->input('prezzo_massaggio_rilassante');
    $salone->prezzo_massaggio_drenante = $request->input('prezzo_massaggio_drenante');
    $salone->prezzo_massaggio_decontratturante = $request->input('prezzo_massaggio_decontratturante');
    $salone->prezzo_pressoterapia = $request->input('prezzo_pressoterapia');
    $salone->prezzo_massaggio_tailandese = $request->input('prezzo_massaggio_tailandese');
    $salone->prezzo_massaggio_viso = $request->input('prezzo_massaggio_viso');
    $salone->prezzo_taglio_uomo = $request->input('prezzo_taglio_uomo');
    $salone->prezzo_colore_uomo = $request->input('prezzo_colore_uomo');
    $salone->prezzo_taglio_barba = $request->input('prezzo_taglio_barba');
    $salone->prezzo_trattamenti_viso_uomo = $request->input('prezzo_trattamenti_viso_uomo');
    $salone->prezzo_barbiere = $request->input('prezzo_barbiere');
    $salone->prezzo_depilazione_uomo = $request->input('prezzo_depilazione_uomo');
    $salone->prezzo_solarium = $request->input('prezzo_solarium');
    $salone->prezzo_trattamenti_anticellulite = $request->input('prezzo_trattamenti_anticellulite');
    $salone->prezzo_trattamenti_dimagranti = $request->input('prezzo_trattamenti_dimagranti');
    $salone->prezzo_bendaggi = $request->input('prezzo_bendaggi');
    $salone->prezzo_circuito_spa = $request->input('prezzo_circuito_spa');
    $salone->orario_apertura = $request->input('orario_apertura');
    $salone->orario_chiusura = $request->input('orario_chiusura');
    $salone->giorno_lunedi = $request->input('giorno_lunedi') ? true : false;
    $salone->giorno_martedi = $request->input('giorno_martedi') ? true : false;
    $salone->giorno_mercoledi = $request->input('giorno_mercoledi') ? true : false;
    $salone->giorno_giovedi = $request->input('giorno_giovedi') ? true : false;
    $salone->giorno_venerdi = $request->input('giorno_venerdi') ? true : false;
    $salone->giorno_sabato = $request->input('giorno_sabato') ? true : false;
    $salone->giorno_domenica = $request->input('giorno_domenica') ? true : false;
    $salone->trasporto = $request->input('trasporto');
    $salone->saloni = $request->input('saloni');
    $salone->team = $request->input('team');
    $salone->punti_forti = $request->input('punti_forti');
    // Assegna altri campi del salone se necessario
    $salone->immagini = $immaginiJson;
    $salone->save();

    // Redirect alla pagina di conferma o ad altre pagine secondo necessità
    return redirect()->route('home')->with('success', 'Salone aggiunto con successo!');
}

public function destroy($id)
{
    $salone = Salone::findOrFail($id);
    $salone->delete();

    return redirect()->route('pages.account');
}

public function searchSaloni(Request $request)
{
    $nome = $request->input('nome');

    // Crea una query per ottenere i saloni
    $saloniQuery = Salone::query();

    // Filtra per nome se presente
    if ($request->has('nome') && $request->input('nome') != '') {
        $nome = $request->input('nome');
        $saloniQuery->where('nome_salone', 'like', '%' . $nome . '%'); // Filtro per nome
    }

    // Esegui la query per ottenere i saloni filtrati
    $saloni = $saloniQuery->get();

    // Definisci i servizi per la vista
    $servizi = [
        'servizio_capelli' => 'Capelli',
        'servizio_viso' => 'Viso',
        'servizio_massaggio' => 'Massaggio',
        'servizio_depilazione' => 'Depilazione',
        'servizio_unghie' => 'Unghie',
        'servizio_corpo' => 'Corpo',
        'servizio_uomo' => 'Per uomo'
    ];

    // Inizializza le variabili
    $trattamento = null; // O assegna un valore predefinito
    $data = null; // Inizializza la variabile $data
    $posizione = null; // Inizializza la variabile $posizione

    // Se ci sono dati nella richiesta, assegna $data e $posizione dal request
    if ($request->has('data')) {
        $data = $request->input('data');
    }
    if ($request->has('posizione')) {
        $posizione = $request->input('posizione'); // Assegna valore a $posizione
    }

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
    return view('pages.saloni', [
        'saloni' => $saloni,
        'servizi' => $servizi, // Passa i servizi alla vista
        'trattamento' => $trattamento, // Passa $trattamento alla vista
        'data' => $data, // Passa $data alla vista
        'posizione' => $posizione, // Passa $posizione alla vista
        'title' => 'Ricerca saloni',
    ]);
}
}
