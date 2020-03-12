<?php


Route::get('/', function () {
    return response()->json([
        'version' => '1.0'
    ]);
});
