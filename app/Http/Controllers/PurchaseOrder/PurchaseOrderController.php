<?php

namespace App\Http\Controllers\PurchaseOrder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PurchaseOrderController extends Controller
{
    public function purchaseorder(){
        $user = Auth::user();
        $detail_bill = DB::table('detail_bills')
        ->join('bills', 'bills.id', '=', 'detail_bills.billId')
        ->join('products', 'products.productId', '=', 'detail_bills.productId')
        ->join('product_types', 'detail_bills.type', 'product_types.id')
        ->select('bills.id', 'products.productName', 'products.productId', 'detail_bills.quantity', 'detail_bills.totalPrice', 'product_types.name', 'bills.status','bills.totalPrice as billTotalPrice',
        DB::raw('(select productImage from product_images where productId = products.productId limit 1) as productImage'))
        ->get();
        //dd($detail_bill);
        //dd($detail_bill->groupBy('id'));
        // $statuses = DB::table('bills')->select('bills.status', 'totalPrice')->get();
        //dd($statuses);
        return view('pages/purchase', ['user' => $user, 'bills' => $detail_bill->groupBy('id')]);
    }
}
