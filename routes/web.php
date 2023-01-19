<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SalesController;
use Illuminate\Support\Facades\Route;

Route::view('/login','login')->name('login');
Route::view('/register','register')->name('register');
Route::post('/login',[AuthController::class, 'login'])->name('login.post');
Route::post('/register',[AuthController::class, 'register'])->name('register.post');
Route::get('/dashboard',[DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('/sales',[SalesController::class, 'index']);
Route::group(['prefix'=>'sales', 'as'=>'sales'], function(){
    Route::get('/',[SalesController::class, 'index'])->name('');
    Route::delete('/{id}',[SalesController::class, 'destroy'])->name('.delete');
    Route::get('/{id}',[SalesController::class, 'item'])->name('.item');
    Route::put('/{id}',[SalesController::class, 'update'])->name('.update');
    // Route::put('/{id}',function(){
    //     return 11111111111;
    // })->name('.update');
});