<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use Illuminate\Http\Request;
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

Route::get('/', [HomeController::class, 'index'])->name('home');


// Verification
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
    ->middleware(['signed', 'throttle:6,1'])
    ->name('verification.verify');

Route::get('/login', function () {
    return view('/pages/login');
})->name('login');

Route::get('/register', function () {
    return view('/pages/register');
})->name('register');

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
})->middleware('verified');

Route::get('/UserManagement', 'App\Http\Controllers\Admin_Controller_User@index');
Route::get('/ProductManagement', 'App\Http\Controllers\Admin_Controller_Product@index');

Route::get('/info-favorite', function () {
    return view('/pages/favorite');
})->middleware('verified');


// POST METHODS
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/administrator', function () {
    return view('/pages/administrator');
});

Route::get('/',[PagesController::class, 'ListCategories']);



