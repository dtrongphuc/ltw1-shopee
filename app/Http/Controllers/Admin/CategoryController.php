<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;

class CategoryController extends Controller
{
    public function deleteCategorytById($categoryId)
    {
        $cart = categories::find($categoryId)->delete();
        //chuyện gì xãy ra nếu danh mục xóa, sản phẩm -> đơn hàng có sản phẩm
        return redirect()->back(); //quay lai trang truoc
    }

    public function AddCategory(Request $req)
    {
        // $cate = new categories;
        // $cate->categoryName = $req->input('tenDM');
        // $cate->description = $req->input('motaDM');
        // $cate->Save();

        $cate = Categories::create([
            'categoryName' => $req->tenDM,
            'description' => $req->motaDM,
        ]);

        //return response()->json($cate, 200);
        return redirect('/admin')->with('success', 'Data Saved');
    }
}
