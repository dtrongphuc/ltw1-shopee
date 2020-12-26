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
        return view('pages.index',['category' => $category]);
    }

    public function ListProducts(Type $var = null)
    {
        $products = Product::all();
        return view('pages.index',['products' => $products]);
    }

    public function ProductImages(Request $request){
        $productId = $request -> productId;

        $images = ProductImage::find($productId)
        if(count($images) != 0){
            return return view('pages.index',['images' => $images]);
        } 
    }

}
