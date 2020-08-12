<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index() {
        // if(Auth::user()->role == 2) {

        // }
        $products = Product::all() ;

        return view('totality.content',compact('products')) ;
    }


}
