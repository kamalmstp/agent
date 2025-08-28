<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendudukController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/penduduks', [PendudukController::class, 'index'])->name('penduduks.index');

Route::middleware('api')->group(function () {
    // Tambahkan rute API lainnya di sini jika diperlukan
    Route::post('/penduduks', [PendudukController::class, 'store']);
});