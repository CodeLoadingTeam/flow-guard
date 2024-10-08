<?php

use App\Http\Controllers\ResidentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salvar', function () {
    // dd('treste');
    return view('welcome');
});

Route::prefix('residente')->group(function () {
    Route::post('/salvar', [ResidentController::class, 'save']);
});

// http://localhost:8000/residente/salvar
