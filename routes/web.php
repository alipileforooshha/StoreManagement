<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExpensesController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\SalesController;
use Illuminate\Support\Facades\Route;

Route::view('/','landing')->name('landing');
Route::view('/login','login')->name('login');
Route::view('/register','register')->name('register');
Route::view('/prices','prices')->name('prices');
Route::post('/login',[AuthController::class, 'login'])->name('login.post');
Route::post('/register',[AuthController::class, 'register'])->name('register.post');
Route::get('/dashboard',[DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('/sales',[SalesController::class, 'index']);

Route::group(['prefix'=>'sales', 'as'=>'sales'], function(){
    Route::get('/',[SalesController::class, 'index'])->name('');
    Route::get('/create',[SalesController::class, 'create'])->name('.create');
    Route::post('/create',[SalesController::class, 'store'])->name('.store');
    Route::delete('/{id}',[SalesController::class, 'destroy'])->name('.delete');
    Route::get('/{id}',[SalesController::class, 'item'])->name('.item');
    Route::put('/{id}',[SalesController::class, 'update'])->name('.update');
});

Route::group(['prefix'=>'expenses', 'as'=>'expenses'], function(){
    Route::get('/',[ExpensesController::class, 'index'])->name('');
    Route::get('/create',[ExpensesController::class, 'create'])->name('.create');
    Route::post('/create',[ExpensesController::class, 'store'])->name('.store');
    Route::delete('/{id}',[ExpensesController::class, 'destroy'])->name('.delete');
    Route::get('/{id}',[ExpensesController::class, 'item'])->name('.item');
    Route::put('/{id}',[SalesController::class, 'update'])->name('.update');
});

Route::group(['prefix'=>'items', 'as'=>'items'], function(){
    Route::get('/',[ItemsController::class, 'index'])->name('');
    Route::get('/create',[ItemsController::class, 'create'])->name('.create');
    Route::post('/create',[ItemsController::class, 'store'])->name('.store');
    Route::delete('/{id}',[ItemsController::class, 'destroy'])->name('.delete');
    Route::get('/{id}',[ItemsController::class, 'item'])->name('.item');
    Route::put('/{id}',[ItemsController::class, 'update'])->name('.update');
});

Route::group(['prefix'=>'categories', 'as'=>'categories'], function(){
    Route::get('/',[CategoryController::class, 'index'])->name('');
    Route::get('/create',[CategoryController::class, 'create'])->name('.create');
    Route::post('/create',[CategoryController::class, 'store'])->name('.store');
    Route::delete('/{id}',[CategoryController::class, 'destroy'])->name('.delete');
    Route::get('/{id}',[CategoryController::class, 'item'])->name('.item');
    Route::put('/{id}',[CategoryController::class, 'update'])->name('.update');
});

Route::group(['prefix'=>'customers', 'as'=>'customers'], function(){
    Route::get('/',[CustomerController::class, 'index'])->name('');
    Route::get('/create',[CustomerController::class, 'create'])->name('.create');
    Route::post('/create',[CustomerController::class, 'store'])->name('.store');
    Route::delete('/{id}',[CustomerController::class, 'destroy'])->name('.delete');
    Route::get('/{id}',[CustomerController::class, 'item'])->name('.item');
    Route::put('/{id}',[CustomerController::class, 'update'])->name('.update');
});