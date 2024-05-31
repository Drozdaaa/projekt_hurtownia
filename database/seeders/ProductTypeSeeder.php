<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Seeder;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::withoutForeignKeyConstraints(function () {
            DB::table('product_types')->truncate();
        });

        DB::table('product_types')->insert(
            [
                [
                    'types' => 'Dla domu',
                ],
                [
                    'types' => 'Dla ogrodu'
                ],
                [
                    'types' => 'Artykuły spożywcze'
                ],
                [
                    'types' => 'AGD'
                ],
                [
                    'types' => 'Chemia'
                ],
                [
                    'types' => 'Zabawki'
                ],
                [
                    'types' => 'Odzież'
                ],

            ]
        );
    }
}
