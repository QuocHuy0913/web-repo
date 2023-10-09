<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\App\ProductController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::post('login', [AuthController::class,'login']);
Route::post('register', [AuthController::class,'register']);
Route::group(['middleware' => ['auth:sanctum'], 'as' => 'api.'], function () {
    Route::get('home', function () {
        return response()->json("welcome",200);
    });
});
Route::get('products',[ProductController::class,'getList']);


