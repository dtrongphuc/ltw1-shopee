<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Categories;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function ListCategories()
    {
        $category = Categories::all();
<<<<<<< HEAD
        $products = Product::all();
        //$products = DB::table('Product')->paginate(15);
        // $image = DB::table('product_images')
        //         ->join('products', 'product_images.productId','=','products.productId')
        //         ->select('productImage')
        //         ->first();
        $image = DB::table('product_images')->select('productImage','productId')->get();
        return view('pages.index',['category' => $category,'image' => $image,'products' => $products]);
=======
        //$products = Product::all()->paginate(15);
        $products = DB::table('products')->paginate(15);
        $image = DB::table('product_images')
                ->join('products', 'product_images.productId','=','products.productId')
                ->select('productImage')
                ->first();
        
        return view('pages.index',[
            'category' => $category,
            'image' => $image,
            'products' => $products
        ]);
>>>>>>> ad053d4841d5bc6c91d543806ab9758e562b888b
    }
}
