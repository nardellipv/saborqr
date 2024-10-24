<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Review;

class ReviewsTableSeeder extends Seeder
{
    public function run()
    {
        foreach (Product::all() as $product) {
            Review::factory()->count(2)->create([
                'product_id' => $product->id,
            ]);
        }
    }
}
