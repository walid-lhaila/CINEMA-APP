<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'firstName' => 'Admin',
            'lastName' => 'User',
            'address' => 'Admin Address',
            'phone' => '123456789',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin2024'),
        ]);

        // Associate the user with the admin table
        Admin::create([
            'user_id' => $user->id,
        ]);

    }
}
