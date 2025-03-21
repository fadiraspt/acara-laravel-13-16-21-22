<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Backend\PendidikanController;
use App\Http\Controllers\Backend\PengalamanKerjaController;
use App\Http\Controllers\Backend\ApiPendidikanController; // Pastikan ini ada

// Dashboard utama
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Grup rute untuk backend
Route::prefix('backend')->group(function () {
    Route::resource('pendidikan', PendidikanController::class);
    Route::resource('pengalaman_kerja', PengalamanKerjaController::class);

    // Rute API untuk Pendidikan
    Route::get('api/pendidikan', [ApiPendidikanController::class, 'getAll']);
    Route::post('api/pendidikan', [ApiPendidikanController::class, 'createPen']);
    Route::put('api/pendidikan/{id}', [ApiPendidikanController::class, 'updatePen']);
    Route::delete('api/pendidikan/{id}', [ApiPendidikanController::class, 'deletePen']);
});
