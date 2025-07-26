<?php

namespace Database\Seeders;

use App\Models\languege;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LanguegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       languege::insert([
       [
        'languege_name' => 'python',
        'student_id' => 2,
       ],
         [
          'languege_name' => 'java',
          'student_id' => 3,
         ],
         [
          'languege_name' => 'c++',
          'student_id' => 4,
         ],
         [
          'languege_name' => 'javascript',
          'student_id' => 2,
         ],
         [
          'languege_name' => 'php',
          'student_id' => 1,
         ],
       ]);
    }
}
