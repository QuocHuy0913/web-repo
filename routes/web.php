<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Routes Admin
Route::prefix('admin')->name('admin.')->group(function (){
    Route::get('/', function () {
        return view('admin.layouts.home');
    })->name('home');
    Route::prefix('products')->name('products.')->group(function () {

    });
    Route::prefix('brands')->name('products.')->group(function () {

    });
    Route::prefix('category')->name('products.')->group(function () {

    });
});

// Routes Client
Route::prefix('client')->name('client.')->group(function (){
    
});

Auth::routes();

