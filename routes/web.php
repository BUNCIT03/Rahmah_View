<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;

Route::get('/', function () {
    return view('landing');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard',   [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::get('/permohonan', [AdminDashboardController::class, 'permohonan'])->name('permohonan');
    Route::get('/laporan',    [AdminDashboardController::class, 'laporan'])->name('laporan');
    Route::get('/landing',    [AdminDashboardController::class, 'landing'])->name('landing');
});
