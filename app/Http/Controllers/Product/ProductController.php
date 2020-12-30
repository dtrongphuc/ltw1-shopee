<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    // Get product from database
    public function __invoke($productId) {
        $product = Product::find($productId);
        $images = DB::table('products')
                ->join('product_images', 'products.productId','=','product_images.productId')
                ->where('products.productId', '=', $productId)
                ->select('productImage')
                ->get();
        $types = ProductType::where('productId', '=', $productId)
                    ->select('id', 'name', 'quantity')->get();
        return view('pages.product', [
            'product' => $product,
            'images' => $images,
            'types' => $types,
         ]);
    }
}
