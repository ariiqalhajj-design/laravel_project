<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Ariiq',
            'email' => 'Ariiq@examplegmail.com',
            'password' => Hash::make('admin1234'),
        ]);
        User::create([
            'name' => 'Ariiq2',
            'email' => 'test@gmail.com',
            'password' => Hash::make('admin1234'),
        ]);
    }
}
