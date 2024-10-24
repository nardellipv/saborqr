<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            RestaurantsTableSeeder::class,
            MenusTableSeeder::class,
            ProductsTableSeeder::class,
            ClientsTableSeeder::class,
            OrdersTableSeeder::class,
            OrderItemsTableSeeder::class,
            ReviewsTableSeeder::class,
            MenuViewsTableSeeder::class,
        ]);
    }
}
