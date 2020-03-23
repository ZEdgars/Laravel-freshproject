<?php

namespace App\Http\Controllers;

use App\Task;
use App\Project;

class ProjectTasksController extends Controller
{




    // addTask method is created in the Project.php file
    public function store(Project $project)
    {

        // validate that the description is required. Can't submit empty
        $attributes = request()->validate(['description' => 'required']);

        // submit new task
        $project->addTask($attributes);

        return back();
    }

//    // EXAMPLE OF HOW TO DO THIS MANUALLY, BUT INSTEAD WE CREATED A DEDICATED CONTROLLER: CompletedTasksController.php
//    // for updating the task
//    public function update(Task $task)
//    {
//
//        // 01 LONG WAY
//        if (request()->has('completed')) {
//            $task->complete();
//        } else {
//            $task->incomplete();
//        }
//
//        // 02 SHORTHAND to the if statement
//        // request()->has('completed') ? $task->complete() : $task->incomplete();
//
//        // 03 CALL METHOD WAY
//        $method = request()->has('completed') ? 'complete' : 'incomplete';
//        $task->$method();
//
//        return back();
//    }
}
