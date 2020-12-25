<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Admin_Controller_Product extends Controller
{
    public function index()
    {
        $product = DB::table('products')
            ->select(
                'products.productName',
                'products.description',
                'products.type',
                'products.price',
                'products.quantity',
                'products.likeCount',
                'products.rate',
                'products.sold',
                'products.postAt',
                'categories.categoryName'
            )
            ->join('categories', 'products.categoryId', 'categories.id')->get();
        //$product = Product::all();
        return view('adminthucong/index', ['sanpham' => $product]);
        //return response()->json($product, 200);
    }
}