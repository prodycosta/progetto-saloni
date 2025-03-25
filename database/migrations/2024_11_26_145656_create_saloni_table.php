<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('saloni', function (Blueprint $table) {
            $table->id(); // bigint UNSIGNED AUTO_INCREMENT
            $table->string('saloni'); // varchar(255)
            $table->string('trasporto'); // varchar(255)
            $table->string('team'); // varchar(255)
            $table->string('punti_forti'); // varchar(255)
            $table->string('nome_salone'); // varchar(255)
            $table->string('posizione'); // varchar(255)
            $table->string('numero_civico', 10); // varchar(10)
            $table->string('nome_proprietario'); // varchar(255)
            $table->string('cognome_proprietario'); // varchar(255)
            $table->string('email'); // varchar(255)
            $table->string('numero_telefono'); // varchar(255)

            // Servizi (tinyint)
            $table->boolean('servizio_capelli')->default(0);
            $table->boolean('servizio_depilazione')->default(0);
            $table->boolean('servizio_unghie')->default(0);
            $table->boolean('servizio_corpo')->default(0);
            $table->boolean('servizio_uomo')->default(0);
            $table->boolean('servizio_viso')->default(0);
            $table->boolean('servizio_massaggio')->default(0);

            // Prezzi (decimal)
            $table->decimal('prezzo_piega', 8, 2)->nullable();
            $table->decimal('prezzo_taglio_donna', 8, 2)->nullable();
            $table->decimal('prezzo_taglio_uomo', 8, 2)->nullable();
            $table->decimal('prezzo_colpi_di_sole', 8, 2)->nullable();
            $table->decimal('prezzo_trattamenti_capelli', 8, 2)->nullable();
            $table->decimal('prezzo_taglio_piega_donna', 8, 2)->nullable();
            $table->decimal('prezzo_trattamenti_viso', 8, 2)->nullable();
            $table->decimal('prezzo_depilazione_sopracciglia', 8, 2)->nullable();
            $table->decimal('prezzo_extension_ciglia', 8, 2)->nullable();
            $table->decimal('prezzo_permanente_ciglia', 8, 2)->nullable();
            $table->decimal('prezzo_colorazione_ciglia_sopracciglia', 8, 2)->nullable();
            $table->decimal('prezzo_depilazione_filo_orientale', 8, 2)->nullable();
            $table->decimal('prezzo_manicure_semipermanente', 8, 2)->nullable();
            $table->decimal('prezzo_manicure', 8, 2)->nullable();
            $table->decimal('prezzo_pedicure', 8, 2)->nullable();
            $table->decimal('prezzo_rimozione_gel', 8, 2)->nullable();
            $table->decimal('prezzo_pedicure_semipermanente', 8, 2)->nullable();
            $table->decimal('prezzo_callus_peeling', 8, 2)->nullable();
            $table->decimal('prezzo_ceretta_corpo', 8, 2)->nullable();
            $table->decimal('prezzo_ceretta_viso', 8, 2)->nullable();
            $table->decimal('prezzo_ceretta_ing_parziale', 8, 2)->nullable();
            $table->decimal('prezzo_ceretta_gambe', 8, 2)->nullable();
            $table->decimal('prezzo_ceretta_braccia_ascelle', 8, 2)->nullable();
            $table->decimal('prezzo_ceretta_ing_totale', 8, 2)->nullable();
            $table->decimal('prezzo_massaggio_rilassante', 8, 2)->nullable();
            $table->decimal('prezzo_massaggio_drenante', 8, 2)->nullable();
            $table->decimal('prezzo_massaggio_decontratturante', 8, 2)->nullable();
            $table->decimal('prezzo_pressoterapia', 8, 2)->nullable();
            $table->decimal('prezzo_massaggio_tailandese', 8, 2)->nullable();
            $table->decimal('prezzo_massaggio_viso', 8, 2)->nullable();
            $table->decimal('prezzo_colore_uomo', 8, 2)->nullable();
            $table->decimal('prezzo_taglio_barba', 8, 2)->nullable();
            $table->decimal('prezzo_trattamenti_viso_uomo', 8, 2)->nullable();
            $table->decimal('prezzo_barbiere', 8, 2)->nullable();
            $table->decimal('prezzo_depilazione_uomo', 8, 2)->nullable();
            $table->decimal('prezzo_solarium', 8, 2)->nullable();
            $table->decimal('prezzo_trattamenti_anticellulite', 8, 2)->nullable();
            $table->decimal('prezzo_trattamenti_dimagranti', 8, 2)->nullable();
            $table->decimal('prezzo_bendaggi', 8, 2)->nullable();
            $table->decimal('prezzo_circuito_spa', 8, 2)->nullable();

            // Orari e giorni (time, tinyint)
            $table->time('orario_apertura')->nullable();
            $table->time('orario_chiusura')->nullable();
            $table->boolean('giorno_lunedi')->default(0);
            $table->boolean('giorno_martedi')->default(0);
            $table->boolean('giorno_mercoledi')->default(0);
            $table->boolean('giorno_giovedi')->default(0);
            $table->boolean('giorno_venerdi')->default(0);
            $table->boolean('giorno_sabato')->default(0);
            $table->boolean('giorno_domenica')->default(0);

            // Altre colonne
            $table->longText('immagini')->nullable(); // longtext
            $table->decimal('latitudine', 10, 7)->nullable(); // decimal(10,7)
            $table->decimal('longitudine', 10, 7)->nullable(); // decimal(10,7)

            // Relazione con la tabella users
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saloni');
    }
};
