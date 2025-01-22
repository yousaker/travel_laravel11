<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tahwiss;

class TahwissSeeder extends Seeder
{
    public function run()
    {
        Tahwiss::factory()->count(40)->create(); // Insère 10 enregistrements
    }
}
