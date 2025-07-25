<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\ShoppingCart;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'role' => 1,
        ]);

        Category::factory(5)->create()->each(function ($category) {
            Product::factory(10)->create([
                'category_id' => $category->id,
            ]);
        });

        User::factory(10)->create()->each(function ($user) {
            $products = Product::inRandomOrder()->take(3)->get();
            foreach ($products as $product) {
                ShoppingCart::create([
                    'user_id' => $user->id,
                    'product_id' => $product->id,
                    'quantity' => rand(1, 5),
                ]);
            }
        });
    }
}
