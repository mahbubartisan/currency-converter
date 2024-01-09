<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'role' => 'Superadmin',
                'password' => Hash::make('password'),
                'status' => 1,
            ],
            [
                'name' => 'Adam',
                'email' => 'user@example.com',
                'role' => 'User',
                'password' => Hash::make('password'),
                'status' => 0,
            ],
            [
                'name' => 'John Doe',
                'email' => 'user2@example.com',
                'role' => 'User',
                'password' => Hash::make('password'),
                'status' => 1,
            ],
            [
                'name' => 'Kylie Jennier',
                'email' => 'manager@example.com',
                'role' => 'Manager',
                'password' => Hash::make('password'),
                'status' => 1,
            ],
            [
                'name' => 'Tonny Craig',
                'email' => 'user4@example.com',
                'role' => 'User',
                'password' => Hash::make('password'),
                'status' => 0,
            ],
            [
                'name' => 'Tommy Gun',
                'email' => 'manager2@example.com',
                'role' => 'Manager',
                'password' => Hash::make('password'),
                'status' => 1,
            ],
            
        ];

        User::insert($users);
    }
}
