<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Laptop ASUS',
            'description' => 'Laptop gaming performa tinggi',
            'image' => 'laptop.jpg',
            'price' => 12000000,
        ]);

        Product::create([
            'name' => 'Mouse Logitech',
            'description' => 'Mouse wireless nyaman digunakan',
            'image' => 'mouse.jpg',
            'price' => 250000,
        ]);

        Product::create([
            'name' => 'Keyboard Mechanical',
            'description' => 'Keyboard mechanical RGB',
            'image' => 'keyboard.jpg',
            'price' => 750000,
        ]);
    }
}
