<?php

use App\Http\Controllers\AutomobileController;
use App\Http\Controllers\ResidentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// FRONT-END - Views
Route::view('/', 'welcome');

Route::view('/acesso', 'access.access');

Route::view('/entrada', 'entry-flow.access');

// BACK-END - Controllers
Route::post('/veiculo/entrar', [AutomobileController::class, 'enter'])
    ->name('automobile.enter');

// Route::prefix('residente')->group(function () {
//     Route::post('/salvar', [ResidentController::class, 'save']);
// });
