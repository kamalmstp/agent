<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendudukController;

Route::post('/penduduks', [PendudukController::class, 'store'])->middleware('api');