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
                'middle_name' => 'Романович',
                'phone' => '89324246601',
                'passport'=> '2345347123',
                'inn' => '123456789123',
                'snils' => '4325324534',
                'credit' => '0'
            ],
    
            [
                'user_id' => 2,
                'name' => 'Кирилл',
                'surname' => 'Казанцев',
                'middle_name' => 'Сергеевич',
                'phone' => '89324246603',
                'passport'=> '2345347123',
                'inn' => '123456789123',
                'snils' => '4325324534',
                'credit' => '0'
            ],
        ]);
    }
}
