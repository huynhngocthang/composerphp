<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class dirtycoinController extends Controller
{
    public function index() {
        $products = Product::all() ;

        return view('dirtycoin.selectionall', compact('products')) ;
    }

    public function show($id) {
        $product = Product::findOrFail($id) ;

        return view('dirtycoin.detail',compact('product')) ;
    }
}
