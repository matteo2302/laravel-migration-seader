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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda');
            $table->string('Stazione_di_partenza');
            $table->string('Stazione_di_arrivo');
            $table->char('Orario_di_partenza');
            $table->char('Orario_di_arrivo');
            $table->string('Codice_Treno');
            $table->char('Numero_Carrozze');
            $table->string('In_orario');
            $table->string('Cancellato');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
