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
        Schema::create('products', function (Blueprint $table) {
            $table->id('id_produit'); // ID personnalisé
            $table->string('name'); // Nom du produit
            $table->text('description')->nullable(); // Description
            $table->decimal('prix', 10, 2); // Prix avec 2 décimales
            $table->string('telephone', 20); // Numéro de téléphone
            $table->string('images')->nullable(); // Nouveau champ pour الصور
            $table->unsignedBigInteger('id_user'); // Référence vers l'utilisateur
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
