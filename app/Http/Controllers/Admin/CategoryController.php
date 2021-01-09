<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Support\Facades\DB;
use Validator;

class CategoryController extends Controller
{
    public function deleteCategorytById($id)
    {
        $count = DB::table('Categories')->join('products', 'Categories.categoryId', '=', 'products.categoryId')->count();
        if ($count > 0) {
            $cate = Categories::where('categoryId', '=', (int)$id)
                ->update([
                    'status' => '0'
                ]);
        } else {
            $cate = Categories::where('categoryId', '=', (int)$id)->delete();
        }
        //return response()->json($count, 200);
        return redirect('/admin')->with('success', 'Data Saved'); //quay lai trang truoc
    }

    public function AddCategory(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'tenDM' => 'required',
        ], [
            'tenDM.required' => 'Vui lòng điền Tên',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $mota = $req->motaDM;
        if ($mota == null)
            $mota = null;
        $cate = Categories::create([
            'categoryName' => $req->tenDM,
            'description' => $mota,
        ]);

        // return response()->json(['success' => true], 200);
        return redirect('/admin')->with('success', 'Data Saved');
    }

    public function EditCategory(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'tenDM' => 'required',
        ], [
            'tenDM.required' => 'Vui lòng điền Tên',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }
        $mota = $req->input('motaDM');
        if ($mota == null)
            $mota = null;
        $cate = Categories::where('categoryId', '=', (int)$req->input('IdDM'))
            ->update([
                'categoryName' => $req->input('tenDM'),
                'description' => $mota
            ]);

        //return response()->json($cate, 200);
        return redirect('/admin')->with('success', 'Data Saved');
    }
}
