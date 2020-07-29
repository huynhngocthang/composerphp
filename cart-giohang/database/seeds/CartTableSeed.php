<?php

use App\Cart;
use Illuminate\Database\Seeder;

class CartTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carts = new Cart() ;
        $carts->name = 'bittet' ;
        $carts->price = '175.5' ;
        $carts->image = 'bittet.jpg';
        $carts->save() ;

        $carts = new Cart() ;
        $carts->name = 'vitnuong' ;
        $carts->price = '17.2' ;
        $carts->image = 'ganuonglathom.jpg';
        $carts->save() ;

        $carts = new Cart() ;
        $carts->name = 'mithitga' ;
        $carts->price = '12.2' ;
        $carts->image = 'mithitga.jpg';
        $carts->save() ;

        $carts = new Cart() ;
        $carts->name = 'Mybobam' ;
        $carts->price = '75.2' ;
        $carts->image = 'mybobam.jpg';
        $carts->save() ;

        $carts = new Cart() ;
        $carts->name = 'bocausotman' ;
        $carts->price = '75.2' ;
        $carts->image = 'bocausotman.jpg';
        $carts->save() ;

        $carts = new Cart() ;
        $carts->name = 'boham' ;
        $carts->price = '250.2' ;
        $carts->image = 'boham.jpg';
        $carts->save() ;

        $carts = new Cart() ;
        $carts->name = 'botieuxanh' ;
        $carts->price = '520.2' ;
        $carts->image = 'botieuxanh.jpg';
        $carts->save() ;

        $carts = new Cart() ;
        $carts->name = 'camutat' ;
        $carts->price = '850.2' ;
        $carts->image = 'camutat.jpg';
        $carts->save() ;

        $carts = new Cart() ;
        $carts->name = 'caphile' ;
        $carts->price = '75.2' ;
        $carts->image = 'camutat.png';
        $carts->save() ;

        $carts = new Cart() ;
        $carts->name = 'casaba' ;
        $carts->price = '75.2' ;
        $carts->image = 'casaba.png';
        $carts->save() ;

        $carts = new Cart() ;
        $carts->name = 'casotcachua' ;
        $carts->price = '75.2' ;
        $carts->image = 'casotcachua.jpg';
        $carts->save() ;

        $carts = new Cart() ;
        $carts->name = 'comchien' ;
        $carts->price = '75.2' ;
        $carts->image = 'comchien.jpg';
        $carts->save() ;

        $carts = new Cart() ;
        $carts->name = 'comthotom' ;
        $carts->price = '75.2' ;
        $carts->image = 'comthotom.jpg';
        $carts->save() ;
    }
}
