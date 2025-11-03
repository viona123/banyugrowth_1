<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UmkmAuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminAuthController;

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


Route::get('/umkm/home', function () {
    return view('umkm.home');
});