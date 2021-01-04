<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bill;

class OrderController extends Controller
{
    public function index()
    {
        $order = Bill::all();
        return view('adminthucong/Order', ['orders' => $order]);
    }
    
    public function findOrderByNumber($orderId)
    {
        return Order::where('Id', $orderId)->first();
    }
    public function updateOrder(array $params)
    {
        $order = $this->findOrderById($params['Id']);

        $collection = collect($params)->except('_token');




        $order->update();


        return $order;
    }
}
