<?php

use App\Task;
use Illuminate\Database\Seeder;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $task = new Task() ;
        $task->id = 1 ;
        $task->title = 'Công việc 1' ;
        $task->content = 'Nội dung công việc 1' ;
        $task->image = "" ;
        $task->save() ;

        $task = new Task() ;
        $task->id = 2 ;
        $task->title = 'Công việc 2' ;
        $task->content = 'Nội dung công việc 2' ;
        $task->image = "" ;
        $task->save() ;

        $task = new Task() ;
        $task->id = 3 ;
        $task->title = 'Công việc 3' ;
        $task->content = 'Nội dung công việc 3' ;
        $task->image = "" ;
        $task->save() ;
    }
}
