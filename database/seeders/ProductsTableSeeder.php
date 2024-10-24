<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        foreach (Menu::all() as $menu) {
            Product::factory()->count(3)->create([
                'menu_id' => $menu->id,
            ]);
        }
    }
}
