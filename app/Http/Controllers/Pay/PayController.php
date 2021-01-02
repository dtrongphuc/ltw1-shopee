<?php

namespace App\Http\Controllers\Pay;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PayController extends Controller
{
    public function pay(){
        $productsofcart = DB::table('products')
        ->join('carts', 'carts.productId', '=', 'products.productId')
        ->select('carts.id', 'products.productName', 'carts.type', 'products.price', 'carts.quantity')
        ->get();
        $sum = 0;
        foreach($productsofcart as $sp)
        {
            $sum = $sum + ($sp->quantity * $sp->price);
        }

        $userinfo = DB::table('users')->where('id', 1)->get();
        return view('pages/pay', ['products' => $productsofcart, 'payall' => $sum, 'userinfo' => $userinfo]);
    }
}
