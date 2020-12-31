<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Product\PostReviewController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\Admin\ChartController;
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

// Forgot password routes
Route::get('/forgot-password', function () {
    return view('/pages/forgotPassword');
})->middleware('guest');

Route::get('/reset-password/{token}', function ($token) {
    return view('pages/resetPassword', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('forgot-password', [AuthController::class, 'forgotPassword'])
    ->middleware('guest')
    ->name('password.forgot');

Route::post('/reset-password', [AuthController::class, 'resetPassword'])
    ->middleware('guest')
    ->name('password.update');

Route::post('register', [AuthController::class, 'register'])->name('auth.create');
Route::post('login', [AuthController::class, 'login'])->name('auth.check');

// Product routes
Route::get('/product/{id}', [ProductController::class, '__invoke']);

// Protected routes
Route::middleware(['auth', 'verified'])->group(function () {
    // Routes user
    Route::prefix('user')->group(function () {
        Route::get('/account', function () {
            return view('/pages/profile');
        });

        Route::get('/purchase', function () {
            return view('/pages/cart');
        });

        Route::get('/favorite', function () {
            return view('/pages/favorite');
        });
    });

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/pay', function () {
        return view('/pages/pay');
    });

    Route::post('/product/post-review', [PostReviewController::class, 'post'])->name('post.review');
});


// Route::get('/admin', function () {
//     return view('/adminthucong/index');
// });

// Route::get('/User', function () {
//     return view('/adminthucong/User');
// });

// Route::get('/chart', function () {
//     return view('/adminthucong/chart');
// });

Route::get('/userManagement', 'App\Http\Controllers\Admin\UserController@index');
Route::get('/admin', 'App\Http\Controllers\Admin\ProductController@index');
Route::get('/orderManagement', 'App\Http\Controllers\Admin\OrderController@index');
Route::get('/chartstatistical', 'App\Http\Controllers\Admin\ChartController@index');


Route::get('/administrator', function () {
    return view('/pages/administrator');
});

Route::get('/', [PagesController::class, 'ListCategories']);
//Route::get('/', [PagesController::class, 'ListProducts']);
//Route::get('/', [PagesController::class, 'ProductImages']);

//giỏ hàng
Route::get('/cart', 'App\Http\Controllers\Cart\CartController@cart');


//TEST ROUTES
Route::get('/upload', [FileUploadController::class, 'showUploadForm']);
Route::post('/upload', [FileUploadController::class, 'storeUploads']);
