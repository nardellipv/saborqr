<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Restaurant;
use App\Models\Menu;

class MenusTableSeeder extends Seeder
{
    public function run()
    {
        foreach (Restaurant::all() as $restaurant) {
            Menu::factory()->count(2)->create([
                'restaurant_id' => $restaurant->id,
            ]);
        }
    }
}
