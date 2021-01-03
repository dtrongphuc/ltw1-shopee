<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\categories;
use App\Models\Product;
use App\Models\ProductType;

class ProductController extends Controller
{
    public function index()
    {
        $category = categories::All();

        $product = DB::table('products')
            ->where('products.status', '=', '1')
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
            ->join('categories', 'products.categoryId', 'categories.categoryId')
            ->orderBy('productId', 'asc')
            ->paginate(6);
        $productype = DB::table('product_types')
            ->select(
                'product_types.productId',
                'product_types.name',
                'product_types.quantity',
                'product_types.price'
            )
            ->join('products', 'products.productId', 'product_types.productId')->get();
        //$product = Product::all();
        return view('adminthucong/index', ['sanpham' => $product, 'category' => $category, 'productType' => $productype]);
        //return response()->json($product, 200);
    }

    public function deleteProducttById($id)
    {
        $product = Product::where('productId', '=', (int)$id)
            ->update([
                'status' => '0'
            ]);
        return redirect()->back(); //quay lai trang truoc
    }

    public function AddProduct(Request $req)
    {
        $sp = $req->sanpham;
        $phanNhom = $sp['mangNhom'];
        $localtime = date("Y-m-d", time());
        $tongsl = 0;
        for ($i = 0; $i < count($phanNhom); $i++) {
            $tongsl = $tongsl + (float)$phanNhom[$i]['slnhom'];
        }
        $Product = Product::create([
            'categoryId' => $sp['danhmuc'],
            'productName' => $sp['tensp'],
            'description' => $sp['mota'],
            'price' => $phanNhom[0]['gianhom'],
            'quantity' => $tongsl,
            'likeCount' => 0,
            'rate' => 0,
            'sold' => 0,
            'postAt' => $localtime
        ]);

        $id = DB::table('products')->max('productId');

        for ($p = 0; $p < count($phanNhom); $p++) {
            $nhom = ProductType::create([
                'productId' => $id,
                'name' => $phanNhom[$p]['tennhom'],
                'quantity' =>   $phanNhom[$p]['slnhom'],
                'price' =>  $phanNhom[$p]['gianhom'],
            ]);
        }
        return response()->json($id, 200);
    }
}
