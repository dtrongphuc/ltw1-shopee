<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Product\PostReviewController;
use App\Http\Controllers\Product\AddToCartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\Admin\ChartController;
use App\Http\Controllers\Cart\CartController;
use App\Http\Controllers\Pay\PayController;
use App\Http\Controllers\PurchaseOrder\PurchaseOrderController;
use App\Http\Controllers\Product\FavoriteController;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\CategoryController;
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

// Category routes
Route::get('/category/{categoryId}', [HomeController::class, 'category']);

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

    Route::prefix('product')->group(function () {
        Route::post('/add-favorite', [FavoriteController::class, 'add']);
        Route::post('/remove-favorite', [FavoriteController::class, 'remove']);
        Route::post('/add-to-cart', [AddToCartController::class, 'addToCart']);
        Route::post('/buy', [AddToCartController::class, 'addToCart']);
        Route::post('/post-review', [PostReviewController::class, 'post'])->name('post.review');
    });
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/cart', 'App\Http\Controllers\Cart\CartController@cart');
});



// Route::get('/admin', function () {
//     return view('/adminthucong/index');
// });

// Route::get('/User', function () {
//     return view('/adminthucong/User');
// });

// Route::get('/Category', function () {
//     return view('/adminthucong/Category');
// });

Route::get('/usermanagement', 'App\Http\Controllers\Admin\UserController@index');
Route::get('/admin', 'App\Http\Controllers\Admin\ProductController@index');
Route::get('/ordermanagement', 'App\Http\Controllers\Admin\OrderController@index');
Route::get('/chartstatistical', 'App\Http\Controllers\Admin\ChartController@index');
Route::get('/categorymanagement/delete/{id}', [CartController::class, 'deleteCartById']);

Route::post('/add-category', [CategoryController::class, 'AddCategory'])->name('add.category');

Route::get('/administrator', function () {
    return view('/pages/administrator');
});

Route::get('/', [HomeController::class, 'index']);
//Route::get('/', [HomeController::class, 'ListProducts']);
//Route::get('/', [HomeController::class, 'ProductImages']);

//giỏ hàng
Route::get('/cart/delete/{cartid}', [CartController::class, 'deleteCartById'])->name('cart.delete');
// Route::post('/cart/UpQuantity', [CartController::class, 'upQuantityProduct'])->name('cart.upquantify');

//thánh toán
Route::get('/pay', 'App\Http\Controllers\Pay\PayController@pay');


//TEST ROUTES
Route::get('/upload', [FileUploadController::class, 'showUploadForm']);
Route::post('/upload', [FileUploadController::class, 'storeUploads']);

// Search Product
Route::get('/search', [HomeController::class, 'searchProduct']);

//đơn mua hàng
// Route::get('/purchaseorder', [PurchaseOrderController::class], 'purchaseorder');
Route::get('/purchaseorder', 'App\Http\Controllers\PurchaseOrder\PurchaseOrderController@purchaseorder');