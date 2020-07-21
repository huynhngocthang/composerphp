<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use function GuzzleHttp\Promise\task;

class TaskController extends Controller
{
    public function index() {
        $tasks = Task::all() ;

        return view('index', compact('tasks')) ;
    }

    public function create() {
        return view('add') ;
    }

    public function welecome() {
        return view('welcome') ;
    }

    public function store( Request $request) {
        $task = new Task() ;
        $task->Tasktitle = $request->inputTitle ;
        $task->Content = $request->inputContent ;
        $task->created_at = $request->inputDueDate ;

        if(!$request->hasFile('inputFile')) {
            $task->image = $request->inputFile ;
        } else {
            $file = $request->file('inputFile') ;

            $fileExtension = $file->getClientOriginalExtension() ;
            $fileName = $request->inputFileName ;

            $newFileName = "$fileName.$fileExtension" ;

            $request->file('inputFile')->storeAs('public/images', $newFileName) ;

            $task->image = $newFileName;
        }
        $task->save() ;

        $message = "Tạo Task $request->Tasktitle thành công!";
        Session::flash('create-success', $message);

        return redirect()->route('task.index', compact('message'));

    }
}
