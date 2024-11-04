<?php

use App\Http\Controllers\AutomobileController;
use App\Http\Controllers\ResidentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/// Frontend - Views /////////////////////////////////////////////////
Route::get('/', function () {
    return view('welcome');
});

Route::get('/acesso', function () {
    return view('access.access');
});

/// Backend - Controllers /////////////////////////////////////////////////
Route::post('/veiculo/entrar', [AutomobileController::class, 'enter'])
    ->name('automobile.enter');

// Route::prefix('residente')->group(function () {
//     Route::post('/salvar', [ResidentController::class, 'save']);
// });
