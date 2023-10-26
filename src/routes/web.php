<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\BrandController as AdminBrandController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Client\DashboardController as ClientDashboardController;
use App\Http\Controllers\Client\ProductController as ClientProductController;
use App\Http\Controllers\Client\UserController;
use App\Http\Controllers\Client\CartController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
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
    Route::get('/',[AdminDashboardController::class, 'index'])->name('index');
    Route::prefix('products')->name('products.')->group(function () {
        Route::get('/', [AdminProductController::class, 'getList'])->name('getList');
        Route::get('/add', [AdminProductController::class, 'getAdd'])->name('getAdd');
        Route::post('/add', [AdminProductController::class, 'postAdd'])->name('postAdd');
        Route::get('/update/{id}', [AdminProductController::class, 'getUpdate'])->name('getUpdate');
        Route::post('/update/{id}', [AdminProductController::class, 'postUpdate'])->name('postUpdate');
        Route::get('deleteItem/{id}', [ AdminProductController::class, 'deleteItem'])->name('delete');
    });
    Route::prefix('categories')->name('categories.')->group(function () {
        Route::get('/', [AdminCategoryController::class, 'getList'])->name('getList');
        Route::get('/add', [AdminCategoryController::class, 'getAdd'])->name('getAdd');
        Route::post('/add', [AdminCategoryController::class, 'postAdd'])->name('postAdd');
        Route::get('/update/{id}', [AdminCategoryController::class, 'getUpdate'])->name('getUpdate');
        Route::post('/update/{id}', [AdminCategoryController::class, 'postUpdate'])->name('postUpdate');
        Route::get('deleteItem/{id}', [ AdminCategoryController::class, 'deleteItem'])->name('delete');
    });
    Route::prefix('brands')->name('brands.')->group(function () {
        Route::get('/', [AdminBrandController::class, 'getList'])->name('getList');
        Route::get('/add', [AdminBrandController::class, 'getAdd'])->name('getAdd');
        Route::post('/add', [AdminBrandController::class, 'postAdd'])->name('postAdd');
        Route::get('/update/{id}', [AdminBrandController::class, 'getUpdate'])->name('getUpdate');
        Route::post('/update/{id}', [AdminBrandController::class, 'postUpdate'])->name('postUpdate');
        Route::get('deleteItem/{id}', [AdminBrandController::class, 'deleteItem'])->name('delete');
    });
    Route::prefix('orders')->name('orders.')->group(function () {
        Route::get('/', [AdminOrderController::class, 'getList'])->name('getList');
    });

});

// Routes Client
Route::get('/', [ClientDashboardController::class, 'home'])->name('home');
Route::get('/shop', [ClientProductController::class, 'getList'])->name('shop');
Route::get('/blog', [ClientDashboardController::class, 'blog'])->name('blog');
Route::get('/more', [ClientDashboardController::class, 'more'])->name('more');
Route::middleware('auth')->group(function () {
    Route::get('/cart', [CartController::class,'showCart'])->name('cart');
    Route::post('/cart', [CartController::class,'checkout'])->name('checkOut');
    Route::get('addToCart/{id}',[CartController::class,'addToCart'])->name('addToCart');
    Route::get('updateItemListCart/{id}/{quantity}',[CartController::class,'updateItemListCart'])->name('updateItemListCart');
    Route::get('deleteItemListCart/{id}',[CartController::class,'deleteItemListCart'])->name('deleteItemListCart');
    Route::get('/userProfile', [UserController::class, 'getUserProfile'])->name('getUserProfile');
    Route::post('/userProfile' , [UserController::class, 'postUserProfile'])->name('postUserProfile');
    Route::get('/userOrder' , [UserController::class, 'getUserOrder'])->name('getUserOrder');
    Route::get('/changePassword' , [UserController::class, 'getChangePassword'])->name('changePassword');
    Route::post('/changePassword' , [UserController::class, 'postChangePassword'])->name('postChangePassword');
});

Auth::routes();
Route::get('home', function(){
    return view('layouts.app');
});



