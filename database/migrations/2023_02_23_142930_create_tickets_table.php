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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->integer('id_biens');
            $table->string('titre',256);
            $table->string('description',4096);
            $table->string('nom_usager',128);
            $table->timestamp('date_saisie');
            $table->enum('statut',['Nouveau','En cours','Rejeté','Terminé','Clos']);
            $table->string('nom_statut',128);
            $table->timestamp('date_statut');
            $table->string('commentaire_statut',1024);
            $table->foreign('id_biens')->references('id')->on('biens');
            $table->timestampsTz();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
