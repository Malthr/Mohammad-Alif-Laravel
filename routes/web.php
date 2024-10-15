<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', [HomeController::class, 'home']) -> name('Ke Home');

Route::get('/register', [AuthController::class, 'register']) -> name('Register');
Route::post('/register', [AuthController::class, 'grab_data']) -> name('Input Data');
Route::get('/welcome', [AuthController::class, 'welcome']) -> name('Ke Welcome');