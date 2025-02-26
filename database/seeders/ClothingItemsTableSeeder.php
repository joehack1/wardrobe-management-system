<?php

// database/seeders/ClothingItemsTableSeeder.php
namespace Database\Seeders;

use App\Models\ClothingItem;
use Illuminate\Database\Seeder;

class ClothingItemsTableSeeder extends Seeder
{
    public function run()
    {
        ClothingItem::create([
            'user_id' => 1,
            'name' => 'Blue T-Shirt',
            'category' => 'tops',
            'description' => 'A comfortable blue t-shirt.',
            'image_url' => 'https://example.com/blue-tshirt.jpg',
        ]);

        ClothingItem::create([
            'user_id' => 1,
            'name' => 'Black Jeans',
            'category' => 'bottoms',
            'description' => 'Stylish black jeans.',
            'image_url' => 'https://example.com/black-jeans.jpg',
        ]);

        ClothingItem::create([
            'user_id' => 2,
            'name' => 'White Sneakers',
            'category' => 'shoes',
            'description' => 'Comfortable white sneakers.',
            'image_url' => 'https://example.com/white-sneakers.jpg',
        ]);
    }
}