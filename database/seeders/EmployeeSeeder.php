<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

        public function run()
    {
        DB::table('employees')->insert([
            [
                'name' => 'Adam',
                'surname' => 'Sikorski',
                'position' => 'Order Picker',
                'email' => 'adam.sikorski@example.com',
                'phone_number' => '123456780',
                'salary' => 5700,
            ],
            [
                'name' => 'Karolina',
                'surname' => 'Majewska',
                'position' => 'Order Picker',
                'email' => 'karolina.majewska@example.com',
                'phone_number' => '123676543',
                'salary' => 5700,

            ],
            [
                'name' => 'Łukasz',
                'surname' => 'Dąbrowski',
                'position' => 'Order Picker',
                'email' => 'lukasz.dabrowski@example.com',
                'phone_number' => '123547802',
                'salary' => 5700,

            ],
            [
                'name' => 'Agnieszka',
                'surname' => 'Zając',
                'position' => 'Order Picker',
                'email' => 'agnieszka.zajac@example.com',
                'phone_number' => '123457803',
                'salary' => 5700,

            ],
            [
                'name' => 'Marcin',
                'surname' => 'Pawlak',
                'position' => 'Order Picker',
                'email' => 'marcin.pawlak@example.com',
                'phone_number' => '126456804',
                'salary' => 5700,

            ],
            [
                'name' => 'Monika',
                'surname' => 'Górska',
                'position' => 'Order Picker',
                'email' => 'monika.gorska@example.com',
                'phone_number' => '122457805',
                'salary' => 5700,

            ],
            [
                'name' => 'Jan',
                'surname' => 'Kowalski',
                'position' => 'Magazynier',
                'email' => 'jan.kowalski@example.com',
                'phone_number' => '993456789',
                'salary'=>6000
            ],
            [
                'name' => 'Anna',
                'surname' => 'Nowak',
                'position' => 'Kierownik Magazynu',
                'email' => 'anna.nowak@example.com',
                'phone_number' => '923456789',
                'salary'=>10000
            ],
            [
                'name' => 'Piotr',
                'surname' => 'Wiśniewski',
                'position' => 'Pracownik Biura Obsługi Klienta',
                'email' => 'piotr.wisniewski@example.com',
                'phone_number' => '823456789',
                'salary'=>6700
            ],
            [
                'name' => 'Katarzyna',
                'surname' => 'Wójcik',
                'position' => 'Specjalista ds. Logistyki',
                'email' => 'katarzyna.wojcik@example.com',
                'phone_number' => '723456789',
                'salary'=>9000
            ],
            [
                'name' => 'Michał',
                'surname' => 'Krawczyk',
                'position' => 'Operator Wózka Widłowego',
                'email' => 'michal.krawczyk@example.com',
                'phone_number' => '623456789',
                'salary'=>6500
            ],
            [
                'name' => 'Ewa',
                'surname' => 'Kwiatkowska',
                'position' => 'Asystent ds. Zakupów',
                'email' => 'ewa.kwiatkowska@example.com',
                'phone_number' => '523456789',
                'salary'=>6000

            ],
            [
                'name' => 'Tomasz',
                'surname' => 'Kaminski',
                'position' => 'Kierowca',
                'email' => 'tomasz.kaminski@example.com',
                'phone_number' => '423456789',
                'salary'=>8000
            ],
            [
                'name' => 'Magdalena',
                'surname' => 'Lewandowska',
                'position' => 'Specjalista ds. Kontroli Jakości',
                'email' => 'magdalena.lewandowska@example.com',
                'phone_number' => '323456789',
                'salary'=>8600
            ],
            [
                'name' => 'Rafał',
                'surname' => 'Zieliński',
                'position' => 'Koordynator Dostaw',
                'email' => 'rafal.zielinski@example.com',
                'phone_number' => '223456789',
                'salary'=>8500
            ],
            [
                'name' => 'Beata',
                'surname' => 'Szymańska',
                'position' => 'Specjalista ds. Sprzedaży',
                'email' => 'beata.szymanska@example.com',
                'phone_number' => '123456789',
                'salary'=>9000
            ],

        ]);
    }
}
