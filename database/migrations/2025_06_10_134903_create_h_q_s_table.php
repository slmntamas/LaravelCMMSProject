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
        Schema::create('h_q_s', function (Blueprint $table) {
    $table->id();
    $table->string('nev');
    $table->string('kapcsolattarto_nev');
    $table->string('kapcsolattarto_telefon')->nullable();
    $table->string('cim');
    $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('h_q_s');
    }
};
