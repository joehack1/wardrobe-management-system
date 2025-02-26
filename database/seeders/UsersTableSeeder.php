<?php
// database/seeders/UsersTableSeeder.php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Johna Doe',
            'email' => 'johna@example.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'name' => 'Janea Smith',
            'email' => 'janea@example.com',
            'password' => Hash::make('password123'),
        ]);
    }
}