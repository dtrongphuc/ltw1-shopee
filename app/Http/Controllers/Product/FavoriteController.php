<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
}
