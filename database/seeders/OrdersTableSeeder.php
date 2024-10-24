<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;
use App\Models\Restaurant;
use App\Models\Order;

class OrdersTableSeeder extends Seeder
{
    public function run()
    {
        foreach (Client::all() as $client) {
            Order::factory()->count(2)->create([
                'restaurant_id' => Restaurant::all()->random()->id,
            ]);
        }
    }
}

