<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Categories;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $category = Categories::all();
        $products = Product::all();
        $image = DB::table('product_images')
                ->join('products', 'product_images.productId','=','products.productId')
                ->select(DB::raw('(select productImage from product_images where productId = products.productId limit 1) as productImage'))
                ->first();
        
        return view('pages.index',[
            'category' => $category,
            'image' => $image,
            'products' => $products
        ]);
    }

    public function searchProduct(Request $request)
    {
        return view('pages.search-results');
    }

    public function category($categoryId) {
        $category = Categories::all();
        $products = Product::where('categoryId', '=', $categoryId)->get();
        $image = Product::where('categoryId', '=', $categoryId)
                ->select(DB::raw('(select productImage from product_images where productId = products.productId limit 1) as productImage'))
                ->first();
        
        return view('pages.index',[
            'category' => $category,
            'image' => $image,
            'products' => $products
        ]);
    }
}
