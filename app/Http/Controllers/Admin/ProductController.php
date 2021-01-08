<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\categories;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\ProductImage;

use function PHPSTORM_META\type;

class ProductController extends Controller
{
    public function index()
    {
        $category = DB::table('categories')->where('categories.status', '=', '1')->get();

        $product = DB::table('products')
            ->where('products.status', '=', '1')
            ->where('categories.status', '=', '1')
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

        //$product = Product::all();
        return view('Admin/index', ['sanpham' => $product, 'category' => $category]);
        //return response()->json($product, 200);
    }

    public function GetGroupProductById(Request $req)
    {
        $id = $req->id;
        $productype = DB::table('product_types')->where('productId', '=', $id)->get();
        $product = DB::table('products')->where('productId', '=', $id)->get();
        return response()->json([$productype, $product], 200);
    }

    public function deleteProducttById($id)
    {
        $product = Product::where('productId', '=', (int)$id)
            ->update([
                'status' => '0'
            ]);
        return redirect()->back(); //quay lai trang truoc
    }

    public function AddProduct(Request $request)
    {
        $productCount = 0;
        $producTypes = json_decode($request->productTypes, true);
        foreach ($producTypes as $type) {
            $productCount += $type['quantity'];
        }

        $product = Product::create([
            'categoryId' => $request->categoryId,
            'productName' => $request->productName,
            'description' => $request->productDescription,
            'price' => $producTypes[0]['price'],
            'quantity' => $productCount,
            'likeCount' => 0,
            'rate' => 0,
            'sold' => 0,
        ]);

        foreach ($producTypes as $type) {
            $producttype = ProductType::create([
                'productId' => $product->productId,
                'name' => $type['name'],
                'quantity' => $type['quantity'],
                'price' => $type['price']
            ]);
        }

        if ($request->hasFile('images')) {
            for ($i = 0; $i < count($request->file('images')); $i++) {
                $publicId = $request->file('images.' . $i)->storeOnCloudinary('products')->getPublicId();

                ProductImage::create([
                    'productId' => $product->productId,
                    'productImage' => $publicId,
                ]);
            }
        }

        return response()->json(['success' => true], 200);
    }

    public function EditProduct(Request $request)
    {
        $productCount = 0;
        $producTypes = json_decode($request->productTypes, true);
        foreach ($producTypes as $type) {
            $productCount += $type['quantity'];
        }


        $product = Product::where('productId', '=', (int)$request->productId)
            ->update([
                'categoryId' => $request->categoryId,
                'productName' => $request->productName,
                'description' => $request->productDescription,
                'price' => $producTypes[0]['price'],
                'quantity' => $productCount,
                'likeCount' => 0,
                'rate' => 0,
                'sold' => 0,
            ]);

        $productImageremove = ProductImage::where('productId', '=', (int)$request->productId)->delete();
        if ($request->hasFile('images')) {
            for ($i = 0; $i < count($request->file('images')); $i++) {
                $publicId = $request->file('images.' . $i)->storeOnCloudinary('products')->getPublicId();

                ProductImage::create([
                    'productId' => $request->productId,
                    'productImage' => $publicId,
                ]);
            }
        }

        $productTyperemove = ProductType::where('productId', '=', (int)$request->productId)->delete();
        foreach ($producTypes as $type) {
            $producttype = ProductType::create([
                'productId' => $request->productId,
                'name' => $type['name'],
                'quantity' => $type['quantity'],
                'price' => $type['price']
            ]);
        }

        return response()->json(['success' => true], 200);
    }
}
