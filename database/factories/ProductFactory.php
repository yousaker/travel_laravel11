<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {

        $images = [
            '4.jpg',
            '3.jpg',
            '2.jpg',
            '1.jpg', // Image par défaut
        ];
        return [
            'name' => $this->faker->word, // Nom du produit
            'description' => $this->faker->text, // Description
            'prix' => $this->faker->randomFloat(2, 5, 100), // Prix aléatoire
            'telephone' => $this->faker->phoneNumber, // Numéro de téléphone
            'images' => 'images/products/' . $this->faker->randomElement($images),  // URL de l'image
            'id_user' => User::inRandomOrder()->first()->id, // Référence à un utilisateur existant
        ];
    }
}
