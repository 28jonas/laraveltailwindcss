<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            'name' => 'Jonas',
            /*'is_active' => 1,*/
            'email' => 'jonasvandecasteele2002@gmail.com',
            'email_verified_at' => now(),
            /*'photo_id'=> Photo::inRandomOrder()->first()->id,*/
            'password' => Hash::make('12345678'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
