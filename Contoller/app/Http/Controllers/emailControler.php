<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class emailControler extends Controller
{

    public function home() {
        return view('index') ;
    }

   public function index(Request $request) {
       $email = $request->email ;
       $isEmail = true ;

       if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
           $isEmail = false ;
       }
       return view('index', compact('isEmail')) ;
   }


}
