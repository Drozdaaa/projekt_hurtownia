<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Jan',
                'email' => 'jan@email.com',
                'email_verified_at' => now(),
                'password' => Hash::make('1234'),
                'remember_token' => Str::random(10),
                'role_id' => 1, // Ustawienie odpowiedniego ID roli
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kamil',
                'email' => 'kamil@email.com',
                'email_verified_at' => now(),
                'password' => Hash::make('1234'),
                'remember_token' => Str::random(10),
                'role_id' => 2, // Ustawienie odpowiedniego ID roli
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Dodaj więcej użytkowników zgodnie z potrzebami
        ]);
    }
}
