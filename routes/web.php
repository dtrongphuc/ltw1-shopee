<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\RegisterController;
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
})->name('home');

// Verification
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('/login', function () {
    return view('/pages/login');
})->name('login');

Route::get('/register', function () {
    return view('/pages/register');
})->name('register');

Route::get('/header', function () {
    return view('/layouts/header');
});

Route::get('/product', function () {
    return view('/pages/product');
});

Route::get('/cart', function () {
    return view('/pages/cart');
});

Route::get('/pay', function () {
    return view('/pages/pay');
});

Route::get('/admin', function () {
    return view('/adminthucong/index');
});

Route::get('/User', function () {
    return view('/adminthucong/User');
});
Route::get('/Chart', function () {
    return view('/adminthucong/chart');
});
Route::get('/info', function () {
    return view('/pages/infouser');
});
Route::get('/info-favorite', function () {
    return view('/pages/favorite');
});


// POST METHODS
Route::post('/register', [RegisterController::class, 'register']);
