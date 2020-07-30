<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StoreController extends Controller
{
    public function showCart($id) {
        $productkey = 'product' . $id ;
        Session::put($productkey,1) ;

        $cart = Cart::findOrFail($id) ;
        return view('cart.show',compact('cart')) ;
    }

    public function store($id) {
        $productkey = 'product' . $id ;
        Session::get($productkey,1) ;

        $cart = Cart::findOrFail($id) ;

        return view('StoreCart.store',compact('cart')) ;
    }

}
