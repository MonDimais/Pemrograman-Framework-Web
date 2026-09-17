<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'role' => 'admin',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Kasir 1',
            'email' => 'kasir1@example.com',
            'role' => 'kasir',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Kasir 2',
            'email' => 'kasir2@example.com',
            'role' => 'kasir',
            'password' => Hash::make('password'),
        ]);
    }
}
