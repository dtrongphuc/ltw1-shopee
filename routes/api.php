<?php

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
// Route::get('/chartstatis', [ChartController::class, 'index']);
Route::get('/statisticalquarter', [ChartController::class, 'StatisticalQuarter']);
Route::get('/statisticalyear', [ChartController::class, 'StatisticalYear']);
Route::get('/statisticalmonth', [ChartController::class, 'StatisticalMonth']);