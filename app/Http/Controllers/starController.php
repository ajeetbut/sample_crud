<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class starController extends Controller
{
    public function showstars(){
        $stars = DB::table('stars')
             ->get();
     
       return view('allstars',['data' => $stars]);
    }


    public function singlestar(string $id){
        $star = DB::table('stars')->where('id',$id)->get();
        return view('star',['data'=> $star]);
    }


    public function addstar(Request $req){
        $star = DB::table('stars')
            ->insert(
                [
                    'name' => $req->username,
                'email' => $req->useremail,
                'age' => $req->userage,
                'city' => $req->usercity,
             
                ]
                
            );

            if($star){
                return redirect()->route('home');
                // echo "<h1>data successfully added.</h>";
            }
            // else{
            //     echo "<h1>data not added.</h1>";
            // }      
    }
    

    public function updatepage(string $id){
        // $star = DB::table('stars')->where('id',$id)->get();
        $star = DB::table('stars')->find($id);
    //    return $star;
        return view('updatestar',['data'=> $star]);
    }

    public function updatestar(Request $req, $id){
       $star = DB::table('stars') 
                  ->where('id', $id)
                  ->update([
                    'name' => $req->username,
                    'email' => $req->useremail,
                    'age' => $req->userage,
                    'city' => $req->usercity,
                    
                  ]);
                  
            if($star){
                return redirect()->route('home');
                // echo "<h1>data successfully update.</h>";
            }
            // else{
            //     echo "<h1>data not update.</h1>";
            // }
    }


    public function deletestar(string $id){
        $star = DB::table('stars')
                   ->where('id',$id)
                   ->delete();
                  
                   if($star){
                    return redirect()->route('home');
                   }
    }
}
