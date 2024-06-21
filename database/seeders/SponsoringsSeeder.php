<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SponsoringsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nom' => 'Doe',
            'prenom' => 'John',
            'email' => 'john.doe@example.com',
            'password' => Hash::make('123456789'),
            'role' => 'admin',
            'token' => Str::random(10),
        ]);

        User::create([
            'nom' => 'Smith',
            'prenom' => 'Jane',
            'email' => 'jane.smith@example.com',
            'password' => Hash::make('123456789'),
            'role' => 'user',
            'token' => str::random(10),
        ]);

        User::create([
            'nom' => 'Brown',
            'prenom' => 'James',
            'email' => 'james.brown@example.com',
            'password' => Hash::make('123456789'),
            'role' => 'user',
            'token' => Str::random(10),
        ]);

        User::create([
            'nom' => 'Johnson',
            'prenom' => 'Emily',
            'email' => 'emily.johnson@example.com',
            'password' => Hash::make('123456789'),
            'role' => 'user',
            'token' => Str::random(10),
        ]);

        User::create([
            'nom' => 'Williams',
            'prenom' => 'Michael',
            'email' => 'michael.williams@example.com',
            'password' => Hash::make('123456789'),
            'role' => 'user',
            'token' => Str::random(10),
        ]);
    }
}
