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
        Schema::create('tahwiss', function (Blueprint $table) {
            $table->id();  // Clé primaire auto-incrémentée (BIGINT UNSIGNED)
            $table->string('titre', 255);
            $table->unsignedBigInteger('categorie');  // Clé étrangère vers categories
            $table->unsignedBigInteger('id_user');  // Clé étrangère vers users
            $table->string('wilaya', 100);
            $table->string('adresse', 255);
            $table->string('numero_telephone', 20);
            $table->decimal('prix', 10, 2);
            $table->string('petite_description', 255)->nullable();
            $table->integer('nombre_de_jours')->nullable();
            $table->text('description')->nullable();
            $table->string('image_tahwissa', 255);
            $table->timestamps();

            // Définir les clés étrangères correctement
            $table->foreign('categorie')
                  ->references('id')
                  ->on('categories')
                  ->onDelete('cascade');

            $table->foreign('id_user')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tahwiss');
    }
};
