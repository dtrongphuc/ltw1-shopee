<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\categories;

class CategoryController extends Controller
{
    public function deleteCategorytById($categoryId)
    {
        $cart = categories::find($categoryId)->delete();
        //chuyện gì xãy ra nếu danh mục xóa, sản phẩm -> đơn hàng có sản phẩm
        return redirect()->back(); //quay lai trang truoc
    }
}
