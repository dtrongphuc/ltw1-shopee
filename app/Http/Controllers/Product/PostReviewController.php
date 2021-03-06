<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Review;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Validator;

class PostReviewController extends Controller
{
    //
    public function post(Request $request) {
        $validator = Validator::make($request->all(),[
            'text' => 'required|min:20|max:255',
            'productId' => 'required',
            'rate' => 'required',
        ], [
            'text.required' => 'Vui lòng điền đánh giá',
            'text.min' => 'Đánh giá tối thiểu 20 ký tự',
            'text.max' => 'Đánh giá tối đa 255 ký tự',
        ]);
        
        if($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $review = Review::create([
            'userId' => Auth::id(),
            'productId' => $request->productId,
            'text' => $request->text,
            'rate' => $request->rate,
        ]);

        self::updateRate($request->productId);
        return Redirect::to(URL::previous() . "#reviews");
    }

    private function updateRate($productId) {
        $reviews = Review::where('productId', '=', $productId)->get();
        $total = 0;

        foreach($reviews as $review) {
            $total += $review->rate;
        }
        
        $rate = $total / $reviews->count();
        $product = Product::find($productId);
        $product->rate = round($rate, 1);
        $product->save();
    }
}
