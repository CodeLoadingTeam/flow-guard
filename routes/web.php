<?php

use App\Http\Controllers\AutomobileController;
use Illuminate\Support\Facades\Route;

// FRONT-END - Views
Route::view('/', 'welcome');

Route::view('/entrada', 'entry-flow.access');

// BACK-END - Controllers
Route::post('/entrada/acessar', [AutomobileController::class, 'enter'])
    ->name('automobile.enter');
