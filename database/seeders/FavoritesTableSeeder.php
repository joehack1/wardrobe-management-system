<?php

// database/seeders/FavoritesTableSeeder.php
namespace Database\Seeders;

use App\Models\Favorite;
use Illuminate\Database\Seeder;

class FavoritesTableSeeder extends Seeder
{
    public function run()
    {
        Favorite::create([
            'user_id' => 1,
            'clothing_item_id' => 2, // John Doe -> Black Jeans
        ]);

        Favorite::create([
            'user_id' => 2,
            'clothing_item_id' => 3, // Jane Smith -> White Sneakers
        ]);
    }
}