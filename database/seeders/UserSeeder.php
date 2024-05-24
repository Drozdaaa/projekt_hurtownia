<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();
        User::insert(
            [
                [
                    'name' => 'Jan', 'email' => 'jan@email.com', 'password' => Hash::make('1234'),
                     'role_id' => 1,
                ],
                [
                    'name' => 'Kamil', 'email' => 'kam@email.com', 'password' => Hash::make('1234'),
                     'role_id' => 2,
                ],

            ]
        );
    }
}
