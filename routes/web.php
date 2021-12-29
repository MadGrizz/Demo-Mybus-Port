<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavbarController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {return view('home');});

Route::get('/home', [NavbarController::class, 'home'])->name('home');

Route::get('/analysis', [NavbarController::class, 'analysis'])->name('analysis');

Route::get('/order', [NavbarController::class, 'order'])->name('order');

Route::get('/packaging', [NavbarController::class, 'packaging'])->name('packaging');

Route::get('/warehouse', [NavbarController::class, 'warehouse'])->name('warehouse');

Route::get('/product', [NavbarController::class, 'product'])->name('product');

Route::get('/add_product', [NavbarController::class, 'add_product'])->name('add_product');
 
Route::get('/edit_product/{id}', [NavbarController::class, 'edit_product'])->name('edit_product');

Route::get('/add_order', [NavbarController::class, 'add_order'])->name('add_order');

