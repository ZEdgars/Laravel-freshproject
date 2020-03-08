<?php

namespace App\Http\Controllers;

/*
Start at the root and find file: Project
App\Projects - this is how it is set up in the Model file
*/
use App\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        // Fetch all projects + save it to a variable
        $projects = Project::all();

        // Load index.blade.php file from projects directory + use compact function to pass projects to the view
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    // Store request data
    public function store()
    {

        $project = new Project();

        $project->title = request('title');
        $project->description = request('description');

        $project->save();

        return redirect('/projects');

    }

    public function show($id)
    {
        // Grab the project ID
        $project = Project::findOrFail($id);

        return view('projects.show', compact('project'));
    }


    public function edit($id)
    {
        // Grab the project ID
        $project = Project::findOrFail($id);

        // Pass it through to the view
        return view('projects.edit', compact('project'));
    }


    public function update($id)
    {
        $project = Project::findOrFail($id);

        $project->title = request('title');
        $project->description = request('description');

        $project->save();

        return redirect('/projects');
    }


    public function destroy($id)
    {
        Project::findOrFail($id)->delete();

        return redirect('/projects');
    }
}

