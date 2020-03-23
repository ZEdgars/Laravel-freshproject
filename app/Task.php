<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    protected $guarded = [];



    // Task can be completed
    public function complete($completed = true)
    {
        $this->update(compact('completed'));
    }



    // Task can be incompleted
    public function incomplete()
    {
        $this->complete(false);
    }



    // Task can be associated with a project
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
