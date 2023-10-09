<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\BrandController as AdminBrandController;
use App\Http\Controllers\Client\DashboardController as ClientDashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Category;
use App\Http\Controllers\Admin\CategoryController;
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
    });
    Route::prefix('categories')->name('categories.')->group(function () {
        Route::get('/', [AdminCategoryController::class, 'getList'])->name('getList');
        Route::get('/add', [AdminCategoryController::class, 'getAdd'])->name('getAdd');
        Route::post('/add', [AdminCategoryController::class, 'postAdd'])->name('postAdd');
        Route::get('/update/{id}', [AdminCategoryController::class, 'getEdit'])->name('getEdit');
        Route::post('/update/{id}', [AdminCategoryController::class, 'postEdit'])->name('postEdit');
        Route::get('/delete/{id}', [AdminCategoryController::class, 'deleteItem'])->name('delete');
    });
    Route::prefix('brands')->name('brands.')->group(function () {
        Route::get('/', [AdminBrandController::class, 'getList'])->name('getList');
        Route::get('/add', [AdminBrandController::class, 'getAdd'])->name('getAdd');
    });

});

// Routes Client
Route::get('/', [ClientDashboardController::class, 'home'])->name('home');
Route::get('/shop', [ClientDashboardController::class, 'shop'])->name('shop');
Route::get('/blog', [ClientDashboardController::class, 'blog'])->name('blog');
Route::get('/more', [ClientDashboardController::class, 'more'])->name('more');
Auth::routes();



