<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{

    function add()
    {
        return view('/students/addStudent');
    }
    function  __invoke(){
        $user =  DB::table('students')->select('id','student_name','student_email')->simplePaginate(2);
        return view('/students/showStudent',['user' => $user]);
    }
    function addStudent(Request $request){
        $data = DB::table('students')->insert([
            'student_name' => $request->student_name,
            'student_email' => $request->student_email
        ]);

        if($data){
            return redirect()->route('students');
        }else{
            return "not inserted";
        }

    }


    function table_join(){
        $data = DB::table('students')
            ->join('langueges', 'langueges.student_id', '=', 'students.id')
            // ->select('langueges.languege_name', 'students.student_name')
            ->get();

            return $data;
    }
    
}
