<?php
namespace Database\Factories;

use App\Models\ReservationTahwissa; // Correct model name
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationTahwissaFactory extends Factory
{
    protected $model = ReservationTahwissa::class;

    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'prenom' => $this->faker->lastName(),
            'tel' => $this->faker->phoneNumber(),
            'id_tahwessa' => $this->faker->numberBetween(1, 25), // Random id_tahwessa between 1 and 25
        ];
    }
}
