<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('/pages/index');
});
Route::get('/login', function () {
    return view('/pages/login');
});
Route::get('/register', function () {
    return view('/pages/register');
});

Route::get('/header', function () {
    return view('/layouts/header');
});
Route::get('/product', function () {
    return view('/pages/product');
});
Route::get('/detail', function () {
    return view('/pages/detailproduct');
});
