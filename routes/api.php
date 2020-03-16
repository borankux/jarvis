<?php

use Illuminate\Http\Request;


Route::post('/auth/login', 'AuthController@login');
Route::post('/auth/logout', 'AuthController@logout');
Route::post('/auth/register', 'AuthController@register');

Route::get('/user', 'UserController@index');

Route::get('/project/{project_id?}','ProjectController@get');
Route::post('/project','ProjectController@create');
Route::put('/project','ProjectController@update');
Route::delete('/project/{project_id}','ProjectController@delete');

Route::get('/task','TaskController@get');
Route::post('/task','TaskController@create');
Route::put('/task','TaskController@update');
Route::delete('/task','TaskController@delete');
Route::put('/task/finish/{task_id}', 'TaskController@finishTask');


Route::get('/list', 'ListController@get');
Route::post('/list', 'ListController@create');
Route::put('/list', 'ListController@update');
Route::delete('/list', 'ListController@delete');
