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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // varchar(255)
            $table->string('surname')->nullable(); // varchar(255) NULL
            $table->string('gender')->nullable(); // varchar(255) NULL
            $table->string('email')->unique(); // varchar(255) UNIQUE
            $table->timestamp('email_verified_at')->nullable(); // timestamp NULL
            $table->string('password'); // varchar(255)
            $table->rememberToken(); // varchar(100) NULL
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
