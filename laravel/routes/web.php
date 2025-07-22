<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;

Route::get('/', function () {
    return view('login');
});

Route::prefix('/')->group(function () {
    Route::get('dashboard', [dashboardController::class, 'dashboard'])->name('dashboard.index');
    Route::get('komponendata', [dashboardController::class, 'komponendata'])->name('component.index');
    Route::get('timbangan', [dashboardController::class, 'timbangan'])->name('timbangan.index');
    Route::get('timbangan/create', [dashboardController::class, 'createTimbangan'])->name('timbangan.create');
    Route::get('kalkulasi', [dashboardController::class, 'kalkulasi'])->name('kalkulasi.index');
    Route::get('visualisasi', [dashboardController::class, 'visualisasi'])->name('visualisasi.index');
    Route::get('laporan', [dashboardController::class, 'laporan'])->name('laporan.index');
    Route::get('penggunaan', [dashboardController::class, 'penggunaan'])->name('penggunaan.index');
    Route::post('logout', [dashboardController::class, 'logout'])->name('logout');
});
