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
        Schema::create('reservationproduit', function (Blueprint $table) {
            $table->id('id'); // ID principal
            $table->unsignedBigInteger('id_produit'); // Référence au produit
            $table->string('name'); // Nom du client
            $table->string('prenom'); // Prénom du client
            $table->string('tel', 20); // Numéro de téléphone
            $table->timestamps();

            // Clé étrangère vers la table products
            $table->foreign('id_produit')->references('id_produit')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservationproduit');
    }
};
