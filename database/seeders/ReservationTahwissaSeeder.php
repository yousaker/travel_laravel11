<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ReservationTahwissa; // Correct model name

class ReservationTahwissaSeeder extends Seeder
{
    public function run()
    {
        ReservationTahwissa::factory()
            ->count(25)
            ->create(); // This will generate random id_tahwessa between 1 and 25
    }
}
