<?php

namespace Database\Seeders;

use App\Models\student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

//         $students = collect([
//     ['student_name' => 'Ali Raza', 'student_email' => 'ali@example.com'],
//     ['student_name' => 'Fatima Khan', 'student_email' => 'fatima@example.com'],
//     ['student_name' => 'Usman Malik', 'student_email' => 'usman@example.com'],
//     ['student_name' => 'Zara Ahmed', 'student_email' => 'zara@example.com'],
//     ['student_name' => 'Hamza Sheikh', 'student_email' => 'hamza@example.com'],
// ]);


   $json = File::get('database/json/student.json');

        // Decode to collection
        $students = collect(json_decode($json));

        // Insert each student into DB
        $students->each(function ($std) {
            Student::create([
                'student_name' => $std->student_name,
                'student_email' => $std->student_email,
            ]);
        });


 }
}


//    $students->each(function($std){
    //     student::insert([$std]);
    //    }) ;


        // for ($i = 1; $i <= 10; $i++) {
        //     student::create([
        //         'student_name' => fake()->name(),
        //         'student_email' => fake()->unique()->safeEmail(),
        //     ]);
        // }
   
