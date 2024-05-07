<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_infos')->insert([
            [
                'user_id' => 1,
                'name' => 'Даниил',
                'surname' => 'Матвеев',
            ],
    
            [
                'user_id' => 2,
                'name' => 'Кирилл',
                'surname' => 'Казанцев',
            ],
        ]);
    }
}
