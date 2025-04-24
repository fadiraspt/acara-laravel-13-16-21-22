<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ApiPendidikanController;

// Definisikan rute untuk method getAll di ApiPendidikanController
Route::get('api-pendidikan', [ApiPendidikanController::class, 'getAll']);
Route::get('api-pendidikan/{id}', [ApiPendidikanController::class, 'getPen']);
Route::post('api-pendidikan', [ApiPendidikanController::class, 'createPen']);
Route::put('api-pendidikan/{id}', [ApiPendidikanController::class, 'updatePen']);
Route::delete('api-pendidikan/{id}', [ApiPendidikanController::class, 'deletePen']);