<?php

namespace Database\Factories;

use App\Models\Review;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    protected $model = Review::class;

    public function definition()
    {
        return [
            'product_id' => Product::factory(),
            'comment' => $this->faker->sentence(),
            'rating' => $this->faker->numberBetween(1, 5), // Calificación entre 1 y 5
        ];
    }
}

