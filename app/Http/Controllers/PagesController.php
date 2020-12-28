<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Categories;
use App\Models\Product;
use App\Models\ProductImage;

class PagesController extends Controller
{
    public function ListCategories()
    {
        $category = Categories::all();
        $products = Product::all();
        $images = ProductImage::all();
        // $images = DB::table('productImage')
        //         ->join('Product', 'productImage.productId','=','Product.productId')
        //         ->select('productImage.productId','productImage')
        //         ->get();
        return view('pages.index',['category' => $category,'images' => $images,'products' => $products]);
    }

}
