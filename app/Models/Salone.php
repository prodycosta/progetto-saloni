<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salone extends Model
{
    use HasFactory;

    protected $table = 'saloni';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'nome_salone',
        'posizione',
        'numero_civico',
        'nome_proprietario',
        'cognome_proprietario',
        'email',
        'numero_telefono',
        'servizio_capelli',
        'servizio_depilazione',
        'servizio_unghie',
        'servizio_corpo',
        'servizio_uomo',
        'servizio_viso',
        'servizio_massaggio',
        'prezzo_piega',
        'prezzo_taglio_donna',
        'prezzo_taglio_uomo',
        'prezzo_colpi_di_sole',
        'prezzo_trattamenti_capelli',
        'prezzo_taglio_piega_donna',
        'prezzo_trattamenti_viso',
        'prezzo_depilazione_sopracciglia',
        'prezzo_extension_ciglia',
        'prezzo_permanente_ciglia',
        'prezzo_colorazione_ciglia_sopracciglia',
        'prezzo_depilazione_filo_orientale',
        'prezzo_manicure_semipermanente',
        'prezzo_manicure',
        'prezzo_pedicure',
        'prezzo_rimozione_gel',
        'prezzo_pedicure_semipermanente',
        'prezzo_callus_peeling',
        'prezzo_ceretta_corpo',
        'prezzo_ceretta_viso',
        'prezzo_ceretta_ing_parziale',
        'prezzo_ceretta_gambe',
        'prezzo_ceretta_braccia_ascelle',
        'prezzo_ceretta_ing_totale',
        'prezzo_massaggio_rilassante',
        'prezzo_massaggio_drenante',
        'prezzo_massaggio_decontratturante',
        'prezzo_pressoterapia',
        'prezzo_massaggio_tailandese',
        'prezzo_massaggio_viso',
        'prezzo_taglio_uomo',
        'prezzo_colore_uomo',
        'prezzo_taglio_barba',
        'prezzo_trattamenti_viso_uomo',
        'prezzo_barbiere',
        'prezzo_depilazione_uomo',
        'prezzo_solarium',
        'prezzo_trattamenti_anticellulite',
        'prezzo_trattamenti_dimagranti',
        'prezzo_bendaggi',
        'prezzo_circuito_spa',
        'orario_apertura',
        'orario_chiusura',
        'giorno_lunedi',
        'giorno_martedi',
        'giorno_mercoledi',
        'giorno_giovedi',
        'giorno_venerdi',
        'giorno_sabato',
        'giorno_domenica',
        'immagini',
        'saloni',
        'trasporto',
        'team',
        'punti-forti'
    ];
}
