<?php

namespace Database\Factories;

use App\Models\MenuView;
use App\Models\Menu;
use Illuminate\Database\Eloquent\Factories\Factory;

class MenuViewFactory extends Factory
{
    protected $model = MenuView::class;

    public function definition()
    {
        return [
            'menu_id' => Menu::factory(),
            'viewed_at' => $this->faker->dateTime(),
        ];
    }
}
