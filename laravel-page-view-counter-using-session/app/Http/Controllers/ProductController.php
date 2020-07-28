<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all() ;

        return view('index',compact('products')) ;
    }

    public function show($id) {
        $productkey = 'product_' . $id ;

        if(!Session::has($productkey)) {
            Product::where('id',$id)->increment('view_count') ;
            session::put($productkey,1) ;
        }

        $product = Product::findOrFail($id) ;

        return view('show',compact(['product'])) ;

    }
}
