<?php

namespace Database\Seeders;

use App\Models\icecreame;
// use App\Models\student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IceCreameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        icecreame::insert([
            ['icecream_name' => 'Vanilla',
            'icecream_price' => '100',],
            ['icecream_name' => 'Chocolate',
            'icecream_price' => '120',],
            ['icecream_name' => 'Strawberry',
            'icecream_price' => '110',],
            ['icecream_name' => 'Mint',
            'icecream_price' => '130',],
            ['icecream_name' => 'Cookie Dough',
            'icecream_price' => '140',],
            ['icecream_name' => 'Pistachio',
            'icecream_price' => '150',],

        ]);
    }
}
