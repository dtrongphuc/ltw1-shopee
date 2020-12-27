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

    public function ListProducts()
    {
        $products = Product::all();
        return view('pages.index',['products' => $products]);
    }

    public function ProductImages(){
        $images = ProductImage::all();
        return view('pages.index',['images' => $images]);
    }

}
