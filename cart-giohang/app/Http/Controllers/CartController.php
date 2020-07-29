<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CartController extends Controller
{
    public function index() {
        $carts = Cart::all() ;

        return view('cart.list',compact('carts')) ;
    }

    public function destroy( $id) {
        $cart = Cart::findOrFail($id) ;
        $image = $cart->image ;

        if($image) {
            Storage::delete('/public/'. $image);
        }

        $cart->delete() ;

        return redirect()->route('cart.list') ;
    }

    public function show($id) {
        $cart = Cart::findOrFail($id) ;
        return view('cart.show',compact('cart')) ;
    }

}
