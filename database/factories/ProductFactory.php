<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Menu;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'menu_id' => Menu::factory(),
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(), // Cambiado a sentence()
            'price' => $this->faker->randomFloat(2, 5, 50), // Precio entre 5 y 50
            'image' => $this->faker->imageUrl(), // URL de la imagen
        ];
    }
}

