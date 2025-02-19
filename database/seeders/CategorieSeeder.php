<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('categories')->insert([
            [
            'name' => 'Sport',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Basketbal',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'AI',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Testen',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Koken',
            'created_at' => now(),
            'updated_at' => now(),
        ],

        ]);
    }
}
