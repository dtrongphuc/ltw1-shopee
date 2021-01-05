<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bill;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        $order = Bill::paginate(10);
        return view('adminthucong/Order', ['orders' => $order]);
    }

    public function EditStatus(Request $req)
    {
        $id = (int)$req->id;
        $status = $req->status;

        $bill = DB::table('bills')
            ->where('id', 1)
            ->update(['status' => 4]);
        return response()->json($req, 200);
    }
}
