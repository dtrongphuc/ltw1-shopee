<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $product = DB::table('products')
            ->select(
                'products.productId',
                'products.productName',
                'products.description',
                'products.price',
                'products.quantity',
                'products.likeCount',
                'products.rate',
                'products.sold',
                'products.postAt',
                'categories.categoryName'
            )
            ->join('categories', 'products.categoryId', 'categories.categoryId')->get();
        //$product = Product::all();
        return view('adminthucong/index', ['sanpham' => $product]);
        //return response()->json($product, 200);
    }

    public function AddProduct(){
        
    }
}
