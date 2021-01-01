<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ChartController;
use App\Http\Controllers\Cart\CartController;
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
// Route::get('/chartstatis', [ChartController::class, 'index']);
Route::get('/statisticalquarter', [ChartController::class, 'StatisticalQuarter']);
Route::get('/statisticalyear', [ChartController::class, 'StatisticalYear']);
//giỏ hàng
Route::post('/cart/UpQuantity', [CartController::class, 'upQuantityProduct'])->name('cart.upquantify');
Route::post('/cart/DownQuantity', [CartController::class, 'DownQuantityProduct'])->name('cart.downquantify');

// Product
