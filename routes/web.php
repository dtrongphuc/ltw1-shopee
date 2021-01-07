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
use App\Http\Controllers\User\AccountController;
use App\Http\Controllers\Admin;
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
Route::post('/api/product/type', [ProductController::class, 'getPriceAndQuantityByTypeId']);

// Category routes
Route::get('/category/{categoryId}', [HomeController::class, 'category'])->name('filter.category');

// Protected routes
Route::middleware(['auth'])->group(function () {
    // Routes user
    Route::prefix('user')->group(function () {
        Route::get('/account', [AccountController::class, 'account']);
        Route::post('/account/update', [AccountController::class, 'updateInfo'])->name('update.account');
        Route::post('/account/change-password', [AccountController::class, 'changePassword'])
            ->name('change.account.password');

        Route::get('/purchase', [PurchaseOrderController::class, 'purchaseorder'])->name('purchaseorder.index');

        Route::get('/favorite', [FavoriteController::class, 'favorite']);
        Route::get('/favorite/delete/{productid}', [FavoriteController::class, 'deleteproduct']);
    });

    Route::prefix('product')->group(function () {
        Route::post('/add-favorite', [FavoriteController::class, 'add']);
        Route::post('/remove-favorite', [FavoriteController::class, 'remove']);
        Route::post('/add-to-cart', [AddToCartController::class, 'addToCart']);
        Route::post('/buy', [AddToCartController::class, 'addToCart']);
        Route::post('/post-review', [PostReviewController::class, 'post'])->name('post.review');
    });
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/cart', [CartController::class, 'cart']);

    Route::get('/pay', 'App\Http\Controllers\Pay\PayController@pay');

    Route::post('/pay/paytoorder', [PayController::class, 'ToPurchaseOrder'])
        ->name('pay.toorder');

    Route::post('/api/cart/UpQuantity', [CartController::class, 'upQuantityProduct'])
        ->name('cart.upquantify');

    Route::post('/api/cart/DownQuantity', [CartController::class, 'DownQuantityProduct'])
        ->name('cart.downquantify');

});


<<<<<<< HEAD
Route::get('/usermanagement', [Admin\UserController::class, 'index']);
Route::get('/admin', [Admin\ProductController::class, 'index']);
Route::get('/ordermanagement', [Admin\OrderController::class, 'index'])->name('orderManagement');
Route::get('/chartstatistical', [Admin\ChartController::class, 'index']);
Route::get('/categorymanagement/delete/{id}', [CartController::class, 'deleteCartById']);

Route::post('/add-category', [CategoryController::class, 'AddCategory'])->name('add.category');
Route::get('/delete-category/{id}', [CategoryController::class, 'deleteCategorytById'])->name('category.delete');
Route::post('/edit-category', [CategoryController::class, 'EditCategory'])->name('edit.category');
Route::get('/delete-product/{id}', [Admin\ProductController::class, 'deleteProducttById'])->name('product.delete');
Route::post('/api/admin/new-product', [Admin\ProductController::class, 'AddProduct'])->name('add.product');
Route::post('/api/admin/get-Group-product', [Admin\ProductController::class, 'GetGroupProductById'])->name('get.GroupProduct');
Route::post('/api/admin/edit-product', [Admin\ProductController::class, 'EditProduct'])->name('edit.product');
Route::post('/api/admin/statuschangeorder', [Admin\OrderController::class, 'EditStatus'])->name('edit.statusOrder');
Route::get('/api/admin/statisticalquarter', [ChartController::class, 'StatisticalQuarter']);
Route::get('/statisticalyear', [ChartController::class, 'StatisticalYear']);
Route::get('/api/admin/statisticalmonth', [ChartController::class, 'StatisticalMonth']);

Route::get('/administrator', function () {
    return view('/pages/administrator');
});
=======
// Admin route
Route::group(['middleware' => ['admin']], function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [Admin\ProductController::class, 'index']);
        Route::get('/usermanagement', [Admin\UserController::class, 'index']);
        Route::get('/orderManagement', [Admin\OrderController::class, 'index'])-> name('orderManagement');
        Route::get('/chartstatistical', [Admin\ChartController::class, 'index']);
        Route::get('/categorymanagement/delete/{id}', [CartController::class, 'deleteCartById']);

        Route::post('/add-category', [CategoryController::class, 'AddCategory'])
                ->name('add.category');
        Route::get('/delete-category/{id}', [CategoryController::class, 'deleteCategorytById'])
                ->name('category.delete');
        Route::post('/edit-category', [CategoryController::class, 'EditCategory'])
                ->name('edit.category');
        Route::get('/delete-product/{id}', [Admin\ProductController::class, 'deleteProducttById'])
                ->name('product.delete');
        Route::post('/api/admin/new-product', [Admin\ProductController::class, 'AddProduct'])
                ->name('add.product');
        Route::post('/api/admin/get-Group-product', [Admin\ProductController::class, 'GetGroupProductById'])
                ->name('get.GroupProduct');
        Route::post('/api/admin/edit-product', [Admin\ProductController::class, 'EditProduct'])
                ->name('edit.product');
        Route::post('/api/admin/statuschangeorder', [Admin\OrderController::class, 'EditStatus'])
                ->name('edit.statusOrder');
    });
    
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



// Route::get('/administrator', function () {
//     return view('/pages/administrator');
// });
>>>>>>> 938c83da6b6245dae2acf164f14f95779e7f9061


//giỏ hàng
Route::get('/cart/delete/{cartid}', [CartController::class, 'deleteCartById'])->name('cart.delete');
// Route::post('/cart/UpQuantity', [CartController::class, 'upQuantityProduct'])->name('cart.upquantify');

//thánh toán

// Search Product
Route::get('/search', [HomeController::class, 'searchProduct'])->name('search');

//đơn mua hàng
// Route::get('/purchaseorder', [PurchaseOrderController::class], 'purchaseorder');

<<<<<<< HEAD
//giỏ hàng
Route::post('/api/cart/UpQuantity', [CartController::class, 'upQuantityProduct'])->name('cart.upquantify');
Route::post('/api/cart/DownQuantity', [CartController::class, 'DownQuantityProduct'])->name('cart.downquantify');
=======
//giỏ hàng
>>>>>>> 938c83da6b6245dae2acf164f14f95779e7f9061
