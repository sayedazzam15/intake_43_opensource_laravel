<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $orders = Order::inRandomOrder()->take(5)->get();
        foreach ($orders as $order) {
            $no_of_products = fake()->numberBetween(1, 5);
            $products = Product::inRandomOrder()->take($no_of_products)->get();
            foreach ($products as $product) {
                $product_quantity = fake()->numberBetween(1, $product->quantity);
                $order->products()->attach($product, ['quantity' => $product_quantity]);
                $product->quantity -= $product_quantity;
                $product->save();
            }
        }
    }
}
