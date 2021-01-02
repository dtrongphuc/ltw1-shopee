<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\categories;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $category = categories::All();
        
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
        return view('adminthucong/index', ['sanpham' => $product, 'category' => $category]);
        //return response()->json($category->count(), 200);
    }

    public function deleteCategorytById($categoryId)
    {
        $cart = categories::find($categoryId)->delete();
        return redirect()->back(); //quay lai trang truoc
    }

    public function AddProduct(){
        
    }
}
