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
}
