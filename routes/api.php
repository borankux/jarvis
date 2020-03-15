<?php

use Illuminate\Http\Request;


Route::post('/auth/login', 'AuthController@login');
Route::post('/auth/logout', 'AuthController@logout');
Route::post('/auth/register', 'AuthController@register');

Route::get('/user', 'UserController@index');

Route::get('/project/{projectId?}','ProjectController@get')->middleware('cors');
Route::post('/project','ProjectController@create');
Route::put('/project','ProjectController@update');
Route::delete('/project','ProjectController@delete');

Route::get('/task','TaskController@get');
Route::post('/task','TaskController@create');
Route::put('/task','TaskController@update');
Route::delete('/task','TaskController@delete');


Route::get('/list', 'ListController@get');
Route::post('/list', 'ListController@create');
Route::put('/list', 'ListController@update');
Route::delete('/list', 'ListController@delete');
