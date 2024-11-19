<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/informasi', [HomeController::class, 'informasi'])->name('informasi');
Route::get('/welcome', [HomeController::class, 'welcome'])->name('welcome');
Route::get('/visimisi', [HomeController::class, 'visimisi'])->name('visimisi');
Route::get('/daycare', [HomeController::class, 'daycare'])->name('daycare');
Route::get('/pendidikan', [HomeController::class, 'pendidikan'])->name('pendidikan');
Route::get('/komite', [HomeController::class, 'komite'])->name('komite');
Route::get('/daftar', [HomeController::class, 'daftar'])->name('daftar');
Route::get('/daftarsd', [HomeController::class, 'daftarsd'])->name('daftarsd');
Route::get('/daftarguru', [HomeController::class, 'daftarguru'])->name('daftarguru');

