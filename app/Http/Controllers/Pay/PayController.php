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

        $userinfo = DB::table('users')->where('id', 3)->get();
        return view('pages/pay', ['products' => $productsofcart, 'payall' => $sum, 'userinfo' => $userinfo]);
    }
    public function ToPurchaseOrder(Request $user){
        $carts = DB::table('carts')->get();
        //them dữ liệu trong giỏ hàng vào bill
        $today = date("j, n, Y");
        $expected = date('Y-m-d', strtotime($today. ' + 7 days'));
        DB::table('bills')->insert(
            ['customerName' => $user->username],
            ['phoneNumber' => $user->phonenumber],
            ['address' => $user->address],
            ['totalPrice' => 0],
            ['createAt' => $today],
            ['expectedAt' => $expected],
            ['status' => 1],
        );
        $billmaxid =  DB::table('bills')->max('id');
        
        foreach($carts as $cart)
        {
            DB::table('bills')->insert(
                ['email' => 'john@example.com', 'votes' => 0]
            );
            
        }
        DB::table('carts')->truncate();  // xóa trong  giỏ hàng và id trở về 0

    }
}
