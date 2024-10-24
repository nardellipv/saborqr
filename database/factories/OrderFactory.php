<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition()
    {
        return [
            'restaurant_id' => Restaurant::factory(),
            'total_price' => $this->faker->randomFloat(2, 10, 200), // Total entre 10 y 200
            'status' => $this->faker->randomElement(['pending', 'completed', 'cancelled']),
        ];
    }
}
