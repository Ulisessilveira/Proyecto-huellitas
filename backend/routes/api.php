<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategorysController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SellsController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
Route::get('/users',[UsersController::class,'index']);
Route::get('/users/{id}',[UsersController::class,'view']);
Route::post('/users',[UsersController::class,'store']);
*/
Route::resource('users',UsersController::class);
Route::resource('products',ProductsController::class);
Route::post('products/do/like',[ProductsController::class,'dolike']);
Route::post('products/add/question',[ProductsController::class,'addquestion']);
Route::post('products/reply/{id}',[ProductsController::class,'reply']);
Route::post('products/review',[ProductsController::class,'review']);
Route::post('products/add/img',[ProductsController::class,'addimg']);
Route::post('products/ver/media/{id}',[ProductsController::class,'verMedia']);
Route::resource('categorys',CategorysController::class);
Route::resource('cart',CartController::class);
Route::resource('sells',SellsController::class);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
