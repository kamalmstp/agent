<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PendudukController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/penduduks', [PendudukController::class, 'index'])->name('penduduks.index');

Route::post('/api/penduduks', [PendudukController::class, 'store']);