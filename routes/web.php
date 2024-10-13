<?php

use App\Http\Controllers\AutomobileController;
use App\Http\Controllers\ResidentController;
use Illuminate\Support\Facades\Route;

/// Frontend /////////////////////////////////////////////////
Route::get('/', function () {
    return view('welcome');
});

Route::get('/acesso', function () {
    return view('access');
});

/// Backend /////////////////////////////////////////////////
Route::post('/veiculo/entrar', [AutomobileController::class, 'enter'])->name('automobile.enter');

// Route::prefix('residente')->group(function () {
//     Route::post('/salvar', [ResidentController::class, 'save']);
// });
