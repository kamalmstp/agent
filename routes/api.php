<?php
use Illuminte\Support\Facades\Route;
use App\Http\Controllers\PendudukController;

Route::post('/api/penduduks', [PendudukController::class, 'store'])->middleware('api');