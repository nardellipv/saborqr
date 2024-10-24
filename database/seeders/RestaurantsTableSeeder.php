<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Restaurant;

class RestaurantsTableSeeder extends Seeder
{
    public function run()
    {
        Restaurant::factory()->count(5)->create(); // Crea 5 restaurantes
    }
}
