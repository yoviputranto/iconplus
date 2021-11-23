<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ProyekController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Auth::routes();

Route::middleware('web')->group(function () {
    Route::get('/', [DashboardController::class,'index'])->name('dashboard');

    Route::get('/program', [ProgramController::class,'index'])->name('program');

    Route::get('/proyek', [ProyekController::class,'index'])->name('proyek');

    Route::get('/monitoring', [MonitoringController::class,'index'])->name('monitoring');

    Route::get('/keuangan', [KeuanganController::class,'index'])->name('keuangan');

    Route::get('/keuangan/tambah', [KeuanganController::class,'create'])->name('keuangan.create');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

