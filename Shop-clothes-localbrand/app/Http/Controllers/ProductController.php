<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index() {
        // if(Auth::user()->role == 2) {

        // }

        return view('totality.header') ;
    }
}
