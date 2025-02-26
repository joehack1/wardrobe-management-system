<?php

// database/seeders/TagsTableSeeder.php
namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    public function run()
    {
        Tag::create(['name' => 'casual']);
        Tag::create(['name' => 'formal']);
        Tag::create(['name' => 'sporty']);
        Tag::create(['name' => 'vintage']);
        Tag::create(['name' => 'summer']);
    }
}