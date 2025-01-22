<?php

namespace Database\Factories;

use App\Models\Tahwiss;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class TahwissFactory extends Factory
{
    protected $model = Tahwiss::class;

    public function definition()
    {
        $images = [
            'UAREYPnfAZGHxaWIuGvDU9Vjc5QclE7cI5Eox8i1.jpg',
            'destination-4.jpg',
            'SrB76tcgUPlejgxUyUoTY1HHtNMFNuxdeG4XO5YN.jpg',
            'default-image.jpg', // Image par défaut
        ];

        return [
            'titre' => $this->faker->sentence(3),
            'categorie' => Category::inRandomOrder()->first()->id, // Catégorie aléatoire
            'id_user' => User::inRandomOrder()->first()->id,       // Utilisateur aléatoire
            'wilaya' => $this->faker->randomElement([
                'Alger', 'Oran', 'Blida', 'Tizi Ouzou', 'Constantine', // Ajoutez d'autres wilayas
            ]),
            'adresse' => $this->faker->address,
            'numero_telephone' => $this->faker->phoneNumber,
            'prix' => $this->faker->randomFloat(2, 100, 5000), // Prix entre 100 et 5000 DA
            'petite_description' => $this->faker->sentence(10),
            'nombre_de_jours' => $this->faker->numberBetween(1, 10),
            'description' => $this->faker->paragraph,
            'image_tahwissa' => 'images/tahwissa/' . $this->faker->randomElement($images), // Image aléatoire
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
