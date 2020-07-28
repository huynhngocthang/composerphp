<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTaskRequest;
use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use function GuzzleHttp\Promise\task;

class TaskController extends Controller
{
    public function index() {
        $tasks = Task::all() ;
        // dd($task) ;
        return view('index', compact('tasks')) ;
    }

    public function create() {
        return view('add') ;
    }

    public function welecome() {
        return view('welcome') ;
    }

    public function store(CreateTaskRequest $request) {
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

    public function edit($id) {
        $task = Task::findOrFail($id) ;
        return view('edit', compact('task')) ;
    }

    public function update(CreateTaskRequest $request, $id) {
        $task = Task::findOrFail($id) ;
        $task->Tasktitle = $request->input('inputTitle') ;
        $task->Content = $request->input('inputContent') ;

        if($request->hasFile('inputFile')) {
            $currentImg = $task->image ;
            if($currentImg) {
                Storage::delete('/public/', $currentImg);
            }
            // $image = $request->file('inputFile') ;
            // $path = $image->store('images','public') ;

            $file = $request->file('inputFile') ;

            $fileExtension = $file->getClientOriginalExtension() ;
            $fileName = $request->inputFileName ;

            $newFileName = "$fileName.$fileExtension" ;

            $request->file('inputFile')->storeAs('public/images', $newFileName) ;


            $task->image = $newFileName ;
        }
        $task->created_at = $request->input('inputDueDate') ;
        $task->save() ;

        Session::flash('success','Cập nhật thành công') ;
        return redirect()->route('task.index') ;
    }

    public function destroy($id) {
        $task = Task::findOrFail($id) ;
        $image = $task->image ;

        if($image) {
            Storage::delete('/public/' . $image);
        }
        $task->delete() ;

        Session::flash('success','Xóa thành công') ;
        return redirect()->route('task.index') ;

    }
}
