<?php


Route::get('/', function () {
    return view('welcome');

});

Route::resource('projects', 'ProjectsController');


Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');



Route::post('/completed-tasks/{task}', 'CompletedTasksController@store');

Route::delete('/completed-tasks/{task}', 'CompletedTasksController@destroy');








Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
