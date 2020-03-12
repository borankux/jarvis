<?php


Route::get('/', function () {
    return response()->json([
        'version' => '1.0'
    ]);
});

Route::get('/projects', function(){
    $projects = \App\Model\Project::all();
    return view('projects', compact('projects'));
});