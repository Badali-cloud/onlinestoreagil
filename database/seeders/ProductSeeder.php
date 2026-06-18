<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'id' => 1,
            'name' => 'Kamera',
            'description' => 'Best kamera',
            'image' => 'kamera.png',
            'price' => 9999,
        ]);

        Product::create([
            'id' => 2,
            'name' => 'Lensa Kamera',
            'description' => 'Best Lensa',
            'image' => '2.png',
            'price' => 999,
        ]);

        Product::create([
            'id' => 3,
            'name' => 'Tas Kamera',
            'description' => 'Best Tas Kamera',
            'image' => 'taskamera.png',
            'price' => 30,
        ]);

        Product::create([
            'id' => 5,
            'name' => 'Professional Camera',
            'description' => 'Kamera Untuk Orang Jago',
            'image' => '5.png',
            'price' => 99999,
        ]);

        Product::create([
            'id' => 6,
            'name' => 'Lensa kamera terbaru',
            'description' => 'Keluaran terbaru',
            'image' => '6.png',
            'price' => 15000,
        ]);
    }
}
