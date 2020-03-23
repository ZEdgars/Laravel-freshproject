<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

// ---------- FORM ROUTING ----------
/*
// Fetch me all projects
Route::get('/projects', 'ProjectsController@index');
// Fetch me a form to create new project
Route::get('/projects/create', 'ProjectsController@create');
// When that form is submitted by a user, store it
Route::post('/projects', 'ProjectsController@store');
// When we have that project, display it (whatever the response type is: JSON, XML, HTML)
Route::get('/projects/{project}', 'ProjectsController@show');
// Edit the project
Route::get('/projects/{project}/edit', 'ProjectsController@edit');
// Display new form. When you submit the form, it should send a patch request
Route::patch('/projects/{project}', 'ProjectsController@update');
// Delete the project
Route::delete('/projects/{project}', 'ProjectsController@destroy');
*/


// ---------- FORM ROUTING (SHORT BETTER WAY) ----------

/* Creates everything you need
Use this to create full ProjectsController.php with everything generated: php artisan make: controller ProjectsController -r
In this case we created our own controller from scratch.
*/
Route::resource('/projects', 'ProjectsController');






/* FOR FORM CHECK BOX
When we receive a patch request, activate controller
*/
// Route::patch('/tasks/{task}', 'ProjectTasksController@update');

/*
For creating new task. This is where it is stored.
*/
Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');
Route::post('/completed-tasks/{task}', 'CompletedTasksController@store');
Route::delete('/completed-tasks/{task}', 'CompletedTasksController@destroy');



