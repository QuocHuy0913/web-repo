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
    Route::get('products', function () {
        return response()->json("welcome",200);
    });
    Route::get('products',[ProductController::class,'getList']);
    Route::get('brands',function(){
        $list = getAllBrand();
        if(!empty($list) && count($list) > 0) {
            return response($list,200);
            }
        return response("Not found",404);
    });
    Route::get('categories',function(){
        $list = getAllCategory();
        if(!empty($list) && count($list) > 0) {
            return response($list,200);
            }
        return response("Not found",404);
    });
});




