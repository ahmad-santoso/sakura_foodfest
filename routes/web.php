<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('user.login');
});

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/home', function () {
    return view('home');
})->name('home');

// route resource for products
Route::resource('/products', \App\Http\Controllers\ProductController::class);
Route::post('/postlogin', [LoginController::class, 'login'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::get('/ringkasan-penjualan', [HomeController::class, 'showRingkasanPenjualan'])->name('ringkasan-penjualan');
Route::get('/daftarmenu-terlaris', [HomeController::class, 'showDaftarMenuTerlaris'])->name('daftarmenu-terlaris');
Route::get('/table-reservasi', [HomeController::class, 'showTableReservasi'])->name('table-reservasi');

