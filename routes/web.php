<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UmkmAuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\UmkmProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/umkm/register', [UmkmAuthController::class, 'showRegister']);
Route::post('/umkm/register', [UmkmAuthController::class, 'register']);

Route::get('/umkm/login', [UmkmAuthController::class, 'showLogin']);
Route::post('/umkm/login', [UmkmAuthController::class, 'login']);

Route::get('/umkm/logout', [UmkmAuthController::class, 'logout']);

Route::get('/umkm/home', [HomeController::class, 'index'])->middleware('session.umkm');

Route::get('/admin/login', [AdminAuthController::class, 'showLogin']);
Route::post('/admin/login', [AdminAuthController::class, 'login']);
Route::get('/admin/logout', [AdminAuthController::class, 'logout']);

Route::get('/umkm/search', [HomeController::class, 'search'])->name('umkm.search');
Route::get('/umkm/produk/{id}', [UmkmProductController::class, 'show']);

Route::get('/', function(){
    return view('auth.landing');
});

Route::get('/umkm/home', function () {
    return view('umkm.home');
});
Route::get('/umkm/informasi/{id}', function ($id) {
    return view('umkm.informasi', ['id' => $id]);
});
Route::get('/umkm/informasi/{id}', function ($id) {
    return view('umkm.informasi', ['id' => $id]);
});

Route::get('/umkm/produk/{id}', function ($id) {
    return view('umkm.produk_detail', ['id' => $id]);
});

