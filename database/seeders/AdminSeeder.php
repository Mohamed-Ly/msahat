<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User; // Add this import

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create the user and get the User model instance
        $user = User::create([
            'name' => 'عبد السميع',
            'email' => 'Abdelsamehalmabrouk@gmail.com',
            'password' => Hash::make('12345678'),
            'roole' => 'super_admin', // Note: Did you mean 'role' or 'roles' instead of 'rools'?
            'status' => '1',
        ]);
        
        // Assign role to the user
        $user->assignRole('super_admin');
    }
}