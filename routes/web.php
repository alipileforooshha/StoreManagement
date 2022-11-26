<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::view('/login','login')->name('login');
Route::view('/register','register')->name('register');
Route::post('/login',[AuthController::class, 'login'])->name('login.post');
Route::post('/register',[AuthController::class, 'register'])->name('register.post');
Route::get('/dashboard',[DashboardController::class, 'index']);
