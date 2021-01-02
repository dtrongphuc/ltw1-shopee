<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\User;
use App\Models\Favorite;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    // Get product from database
    public function __invoke($productId) {
        $userId = Auth::id();

        $product = Product::find($productId);

        $images = DB::table('products')
                ->join('product_images', 'products.productId','=','product_images.productId')
                ->where('products.productId', '=', $productId)
                ->select('productImage')
                ->get();
        $favorited = Favorite::where('userId', '=', $userId)
                                ->where('productId', '=', $productId)
                                ->exists();

        $types = ProductType::where('productId', '=', $productId)
                    ->select('id', 'name', 'quantity')->get();
        
        $reviews = DB::table('reviews')
                    ->join('products', 'reviews.productId','=', 'products.productId')
                    ->join('users', 'reviews.userId', '=', 'users.id')
                    ->where('products.productId', '=', $productId)
                    ->orderBy('reviews.created_at', 'desc')
                    ->select('avatar', 'email', 'reviews.rate', 'text', 'reviews.created_at')
                    ->paginate(5)->fragment('reviews');

        if(isset($userId)){
            $currentUserAvatar = User::find($userId)->avatar;
        } 
        return view('pages.product', [
            'product' => $product,
            'favorited' => $favorited,
            'images' => $images,
            'types' => $types,
            'reviews' => $reviews,
            'currentUserAvatar' => $currentUserAvatar ?? null
        ]);
    }
}