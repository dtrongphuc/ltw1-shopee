<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use Validator;

class AddToCartController extends Controller
{
    // Add to cart
    public function addToCart(Request $request) {
        $userId = Auth::id();
        $validator = Validator::make($request->all(),[
            "productId" => "required",
            "quantity" => "required",
            "type" => "required",
        ], [
            'productId.required' => 'Có lỗi xảy ra',
            'quantity.required' => 'Vui lòng nhập số lượng',
            'type.required' => 'Vui lòng chọn phân loại hàng',
        ]);

        if($validator->fails() || !isset($userId)) {
            return response()->json(['errors' => $validator->errors()], 404);
        }

        $cart = Cart::create([
            'userId' => $userId,
            'productId' => $request->productId,
            'quantity' => $request->quantity,
            'type' => $request->type,
        ]);

        return response()->json(['success' => true], 200);
    }
}
