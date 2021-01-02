<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function deleteCategorytById($id)
    {
        $count = DB::table('Categories')->join('products', 'Categories.categoryId', '=', 'products.categoryId')->count();
        if ($count > 0) {
            $cate = Categories::where('categoryId', '=', (int)$id)
                ->update([
                    'status' => 0
                ]);
        } else {
            $cate = Categories::where('categoryId', '=', (int)$id)->delete();
        }
        //return response()->json($count, 200);
        return redirect('/admin')->with('success', 'Data Saved'); //quay lai trang truoc
    }

    public function AddCategory(Request $req)
    {
        $cate = Categories::create([
            'categoryName' => $req->tenDM,
            'description' => $req->motaDM,
        ]);

        //return response()->json($cate, 200);
        return redirect('/admin')->with('success', 'Data Saved');
    }

    public function EditCategory(Request $req)
    {
        $cate = Categories::where('categoryId', '=', (int)$req->input('IdDM'))
            ->update([
                'categoryName' => $req->input('tenDM'),
                'description' => $req->input('motaDM')
            ]);

        //return response()->json($cate, 200);
        return redirect('/admin')->with('success', 'Data Saved');
    }
}
