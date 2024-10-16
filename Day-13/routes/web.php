<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tables', function(){
    return view('tables');
});

Route::get('/show-data', function(){
    return view('data-tables');
});