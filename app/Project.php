<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // To make sure user can't manipulate data from the browser - change user Id for example
    protected $guarded = [];
}
