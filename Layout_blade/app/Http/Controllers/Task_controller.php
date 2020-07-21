<?php

namespace App\Http\Controllers;

use App\categori;
use Illuminate\Http\Request;

class Task_controller extends Controller
{
    public function index() {
       $data = categori::all() ;
// dd($data);
        return view('Task.list', compact('data')) ;
    }
}
