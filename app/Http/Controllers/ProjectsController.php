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

        // This is back-end validation for the form. So empty field is not allowed.

        $attributes = request()->validate([
            'title' => ['required', 'min:3'], // require min3 characters
            'description' => ['required', 'max:25']
        ]);

        Project::create($attributes);

        return redirect('/projects');
    }






    // Fetches the project and passes it to the controller
    public function show(Project $project)
    {
        // Grab the project ID (Longer way)
        // $project = Project::findOrFail($id);

        return view('projects.show', compact('project'));
    }







    public function edit(Project $project)
    {
        // Pass it through to the view
        return view('projects.edit', compact('project'));
    }







    public function update(Project $project)
    {
        $project->update(request(['title', 'description']));

        return redirect('/projects');
    }







    public function destroy(Project $project)
    {
        $project->delete();

        return redirect('/projects');
    }
}

