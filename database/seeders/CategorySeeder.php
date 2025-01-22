<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Category::create(['name_Categories' => 'activités']);
        Category::create(['name_Categories' => 'cinéma']);
        Category::create(['name_Categories' => 'séjour']);
        Category::create(['name_Categories' => 'Arcades']);
        Category::create(['name_Categories' => 'Culture']);
        Category::create(['name_Categories' => 'Restaurants']);

    }
}
