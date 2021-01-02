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
    public function index(Request $request)
    {
        $category = Categories::all();
        $isHasCategory = $request->has('category');
        $isHasFilter = $request->has('filter');
        $products = ($isHasCategory && $isHasFilter) ? 
                    (self::productsWithCategoryAndFilter($request->category, $request->filter)) :
                    ($isHasCategory ? self::productsWithCategory($request->category) :
                    ($isHasFilter ? self::productsWithFilter($request->filter) :
                    Product::orderBy('likeCount', 'desc')->get()));
        return view('pages.index',[
            'category' => $category,
            'products' => $products
        ]);
    }

    public static function getFirstImageProduct($productId) {
        $image = productImage::where('productId', '=', $productId)->first();
        return cloudinary()->getImage('products/'.$image->productImage);
    }

    public function searchProduct(Request $request)
    {
        $querySearch = $request ->input('querySearch');

        $products = Product::where('productName','like',"%$querySearch%")->get();

        return view('pages.searchResults')-> with('products',$products);
    }

    public function productsWithCategory($categoryId) {
        return Product::where('categoryId', '=', $categoryId)->get();
    }

    public function productsWithFilter($filter) {
        $orderBy = '';
        switch($filter) {
            case "popular":
                $orderBy = 'likeCount';
                break;
            case "new":
                $orderBy = 'postAt';
                break;
            case "selling":
                $orderBy = 'sold';
                break;
            default:
                $orderBy = 'likeCount';
        }
        return Product::orderBy($orderBy, 'desc')->get();
    }

    public function productsWithCategoryAndFilter($category, $filter) {
        $orderBy = '';
        switch($filter) {
            case "popular":
                $orderBy = 'likeCount';
                break;
            case "new":
                $orderBy = 'postAt';
                break;
            case "selling":
                $orderBy = 'sold';
                break;
            default:
                $orderBy = 'likeCount';
        }

        return Product::where('categoryId', '=', $category)
                        ->orderBy($orderBy, 'desc')->get();
    }
}
