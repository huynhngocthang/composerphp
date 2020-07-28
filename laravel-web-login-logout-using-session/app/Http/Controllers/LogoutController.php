<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logOut(Request $request)
    {
        $request->session()->flush() ;

        return view('layout.login') ;
    }
}
