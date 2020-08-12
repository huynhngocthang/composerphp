<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index() {

        return view('cart.addCart') ;
    }

    public function addCart(Request $request,Product $product) {

        if(session('cart')){
            $cart = session('cart');
        }else{
            $cart = [];
        }
        $flag = true;
        foreach($cart as $key => $item){
            if($item['id'] == $product->id){
                $cart[$key]['sl'] =  $cart[$key]['sl'] + 1;
                $flag = false;
            }
        }
        if($flag){
            $item_cart = [
                'id'=> $product->id,
                'name'=> $product->name,
                'price'=> $product->price,
                'image'=> $product->image1,
                'sl' => 1,
                'total_detail'=> ''
            ];
            $cart[]=$item_cart;
        }
        foreach($cart as $key => $item){
            $cart[$key]['total_detail'] = $item['price'] * $item['sl'];
        }
        Session::put('cart',$cart);

        return redirect()->back() ;
    }
}
