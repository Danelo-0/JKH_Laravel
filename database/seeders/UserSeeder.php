<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
        [
            'login' => 'Danelo_0',
            'email' => 'daniil.matveev.01@live.ru',
            'password' => Hash::make('Danelo_0'),
            'status' => 'user'
        ],

        [
            'login' => 'Kirill',
            'email' => 'Kirill2010@mail.ru',
            'password' => Hash::make('Kirill'),
            'status' => 'admin'
        ],
    ]);
    }
}
