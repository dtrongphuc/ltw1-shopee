<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Favorite;
use App\Models\Product;

class FavoriteController extends Controller
{
    // Add to favorite
    public function add(Request $request) {
        $userId =  Auth::id();
        $productId = $request->productId;
        if(isset($userId) && isset($productId)) {
            $check = Favorite::where('userId', '=', $userId)
                                ->where('productId', '=', $productId)
                                ->exists();
            if(!$check) {
                $favorite = Favorite::create([
                    'userId' => $userId,
                    'productId' => $productId,
                ]);
                $likeCount = self::updateCount($productId);
                return response()->json(['success' => true, 'count' => $likeCount], 200);
            }
        }
        return response()->json(['success' => false], 406);
    }

    // Remove from favorite
    public function remove(Request $request) {
        $userId =  Auth::id();
        $productId = $request->productId;
        if(isset($userId) && isset($productId)) {
            $check = Favorite::where('userId', '=', $userId)
                                ->where('productId', '=', $productId)
                                ->exists();
            if($check) {
                $deletedRows = Favorite::where('userId', '=', $userId)
                                    ->where('productId', '=', $productId)
                                    ->delete();
                if($deletedRows > 0) {
                    $likeCount = self::updateCount($productId);
                    return response()->json(['success' => true, 'count' => $likeCount], 200);
                }
                return response()->json(['success' => false], 404);
            }
        }
        return response()->json(['success' => false], 404);
    }

    public function updateCount($productId) {
        $count = Favorite::where('productId', '=', $productId)->count();
        $product = Product::find($productId);
        $product->likeCount = $count;
        $product->save();
        return $count;
    }

    public function favorite(){
        $iduser = Auth::id();
        $productfavorite =  Favorite::join('products', 'favorites.productId', '=', 'products.productId')
        ->where('favorites.userId', $iduser)
        ->select('products.productName', 'products.price', 'favorites.productId',
        DB::raw('(select productImage from product_images where productId = products.productId limit 1) as productImage'))
        ->get();
        return view('pages/favorite', ['products' => $productfavorite]);
    }
    public function deleteproduct($productId){
        $userId = Auth::id();
        $favorite = Favorite::where('userId', '=', $userId)
                            ->where('productId', '=', $productId)
                            ->delete();
        return redirect()->back();
    }
}
