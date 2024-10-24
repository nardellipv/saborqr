<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;
use App\Models\MenuView;

class MenuViewsTableSeeder extends Seeder
{
    public function run()
    {
        foreach (Menu::all() as $menu) {
            MenuView::factory()->count(rand(5, 20))->create([
                'menu_id' => $menu->id,
                'viewed_at' => now()->subDays(rand(1, 30)), // Random date within the last 30 days
            ]);
        }
    }
}
