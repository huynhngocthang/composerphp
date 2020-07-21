<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\task;

class TaskController extends Controller
{
    public function index() {
        $tasks = Task::all() ;

        return view('index', compact('tasks')) ;
    }
}
