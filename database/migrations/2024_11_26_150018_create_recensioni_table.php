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
        Schema::create('recensioni', function (Blueprint $table) {
            $table->id();
            $table->foreignId('salone_id')->constrained('saloni')->onDelete('cascade'); // bigint UNSIGNED, relazione con 'saloni'
            $table->string('nome'); // varchar(255)
            $table->text('recensione'); // text
            $table->timestamp('data_recensione')->default(DB::raw('CURRENT_TIMESTAMP')); // timestamp con valore predefinito
            $table->tinyInteger('voto')->unsigned()->default(0); // tinyint(3) UNSIGNED con valore predefinito 0
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recensioni');
    }
};
