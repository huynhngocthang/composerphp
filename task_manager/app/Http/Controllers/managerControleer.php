<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class managerControleer extends Controller
{
    public function index() {
        return view('modules/customer/index') ;
    }

    public function create() {
        return view('modules/customer/index') ;
    }

}
