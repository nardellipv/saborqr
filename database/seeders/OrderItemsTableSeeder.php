<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\Order;

class OrderItemsTableSeeder extends Seeder
{
    public function run()
    {
        foreach (Order::all() as $order) {
            OrderItem::factory()->count(3)->create([
                'order_id' => $order->id,
                'product_id' => Product::all()->random()->id,
            ]);
        }
    }
}
