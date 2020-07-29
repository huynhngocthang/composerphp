<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StoreController extends Controller
{
    public function showCart($id) {
        $productkey = 'product' . $id ;
        if(Session::has($productkey)) {
            session::put($productkey) ;
        }
        $cart = Cart::findOrFail($id) ;

        return view('Storecart.store',compact('cart')) ;
    }

}
