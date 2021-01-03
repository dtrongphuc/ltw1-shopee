<?php

namespace App\Http\Controllers\PurchaseOrder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PurchaseOrderController extends Controller
{
    public function purchaseorder(){
        $detail_bill = DB::table('detail_bills')
        ->join('bills', 'bills.id', '=', 'detail_bills.billId')
        ->join('products', 'products.productId', '=', 'detail_bills.productId')
        ->select('bills.id', 'bills.status', 'products.productName', 'detail_bills.quantity', 'detail_bills.totalPrice')
        ->get();
        // dd($detail_bill);
        return view('pages/purchaseorder', ['bills' => $detail_bill->groupBy('id')]);
    }
}
