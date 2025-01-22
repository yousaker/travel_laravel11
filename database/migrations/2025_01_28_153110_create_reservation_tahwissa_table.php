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
        Schema::create('reservation_tahwissa', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nom du client
            $table->string('prenom'); // Prénom du client
            $table->string('tel'); // Numéro de téléphone
            $table->unsignedBigInteger('id_tahwessa'); // Clé étrangère vers tahwiss

            $table->timestamps(); // Dates de création et modification

            // Clé étrangère vers la table tahwiss
            $table->foreign('id_tahwessa')
                  ->references('id')
                  ->on('tahwiss')
                  ->onDelete('cascade'); // Suppression en cascade
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservation_tahwissa');
    }
};
