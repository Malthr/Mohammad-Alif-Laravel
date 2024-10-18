<?php

use App\Http\Controllers\CastController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('tables');
});

Route::get('/tables', function(){
    return view('tables');
});

Route::get('/show-data-tables', function(){
    return view('data-tables');
});

Route::get('/cast', [CastController::class, 'index']) -> name('tampil_data');

Route::get('/cast/create', [CastController::class, 'create']);

Route::post('/cast', [CastController::class, 'store']) -> name('simpan_data');

Route::get('/cast/{id}', [CastController::class, 'show']) -> name('detail_data');

Route::get('/cast/{id}/edit', [CastController::class, 'edit']) -> name('edit_data');

Route::put('/cast/{id}/updated', [CastController::class, 'update']) -> name('simpan_edit');

Route::delete('/cast/{id}/delete', [CastController::class, 'destroy']) -> name('delete_data');
