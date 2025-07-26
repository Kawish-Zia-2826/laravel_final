<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
   
    public function __invoke()
    {
        return view('home', ['name' => 'kawish zia']);
    }

    public function about(){
        return view('about');
    }
    public function icecream(){

        $card = DB::table('icecreames')->get();

        return view('creame',['card' => $card]);
    }

    public function contact(){
        return view('contact');
    }

    public function blog(){
        return view('blog');
    }
    public function service(){
        return view('service');
    }

    public function singleRec(string $id){
        $singleRec = DB::table('icecreames')->where('id',$id)->select('id','icecream_name','icecream_price')->get();
        // return $singleRec;

        return view('singleIcCreame',['singleRec' => $singleRec]);


     
}

   function updateIceCreame($id){
           $update =  DB::table('icecreames')
            ->where('id',$id)
            ->update(
                [
                    'icecream_name' => "Triple_choco_blast",
                    
                ]
                );

            if($update){
                return redirect()->route('icecream');
            }else{
                return "not updated";
        }
    }
}
