<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PackController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\HomeController;
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

Route::get('/product',[ProductController::class,'index']);

Route::post('/add_product',[ProductController::class,'store']);

Route::get('/show_product/{id}',[ProductController::class,'show']);

Route::put('/edit_product/{id}',[ProductController::class,'update']);

Route::delete('/product_delete/{id}',[ProductController::class,'destroy']);

Route::get('/order',[OrderController::class,'index']);

Route::post('/add_order',[OrderController::class,'store']);

Route::delete('/order_delete/{id}',[OrderController::class,'destroy']);

Route::get('/pack',[PackController::class,'index']);

Route::put('/approve_order/{type}/{id}',[PackController::class,'update']);

Route::put('/manage_stock/{type}/{id}',[WarehouseController::class,'update']);

Route::get('/home',[HomeController::class,'index']);