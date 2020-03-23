<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // To make sure user can't manipulate data from the browser - change user Id for example
    protected $guarded = [];



    // Build new relationship for project with tasks
    public function tasks()
    {
        // Project has many tasks
        return $this->hasMany(Task::class);
    }



    // Method for adding a task - project can add a task
    public function addTask($task)
    {
        // Create a new task with the new entered description
        $this->tasks()->create($task);
    }

}
