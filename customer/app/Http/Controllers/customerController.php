<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customerController extends Controller
{
    public function index() {
        $customers = [
            '0'=> [
                'id'=>1,
                'name'=>'customer1',
                'bod'=>'1998-09-01',
                'email'=>'customer1@gmail.com'
            ],
            '1'=> [
                'id'=>2,
                'name'=>'customer2',
                'bod'=>'1998-09-02',
                'email'=>'customer2@gmail.com'
            ],
            '2'=> [
                'id'=>3,
                'name'=>'customer3',
                'bod'=>'1998-09-04',
                'email'=>'customer3@gmail.com'
            ]
        ] ;

        return view('customer.list', compact('customers')) ;
    }
}
