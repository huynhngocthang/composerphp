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

    public function addCart(Product $product) {

        if(session('cart')){
            $data = session('cart');


        }else{
            $data['cart'] = [];
        }
        $cart = $data['cart'];
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
        $total  = 0;
        $count = 0;

            foreach($cart as $key => $item){
                $cart[$key]['total_detail'] = $item['price'] * $item['sl'];
                $total += $cart[$key]['total_detail'];
                $count += $cart[$key]['sl'];
            }

        $data['cart'] =  $cart;
        $data['total'] = $total;
        $data['count'] = $count;
        Session::put('cart',$data);

        return redirect()->back() ;
    }

    public function RemoveRow( $product) {
        if(session('cart')){
            $data = session('cart');
            $cart = $data['cart'];
            foreach($cart as $key => $item){
                if($item['id'] == $product){
                    unset($cart[$key]);
                }
            }
            $total  = 0;
            $count = 0;
            foreach($cart as $key => $item){
                $total += $cart[$key]['total_detail'];
                $count += $cart[$key]['sl'];
            }
            $data['cart']=$cart;
            $data['total'] = $total;
            $data['count'] = $count;
            Session::put('cart',$data);
            return redirect()->back();
        }
    }

    public function clearall() {
        session()->flush('cart');
        return redirect()->back() ;
    }

    public function apiCart(Request $request){

        if(session('cart')){
            $data = session('cart');
            $cart = $data['cart'];
            foreach($cart as $key => $item){
                if($item['id'] == $request->id){
                    $cart[$key]['sl'] = $request->sl;
                    $cart[$key]['total_detail'] = $cart[$key]['sl'] * $cart[$key]['price'];
                }
            }
            $total  = 0;
            $count = 0;
            foreach($cart as $key => $item){
                $total += $cart[$key]['total_detail'];
                $count += $cart[$key]['sl'];
            }
            $data['cart']=$cart;
            $data['total'] = $total;
            $data['count'] = $count;
            Session::put('cart',$data);
            $table = view('totality.table_cart')->render();
            return response()->json(['code'=>200,'table'=>$table,'count'=>$data['count']],200);
        }

    }

    public function checkout() {
        $data = session('cart');

        return view('checkout.checkout', compact('data')) ;
    }
}
