<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bill;

class OrderController extends Controller
{
    public function index()
    {
        $order = Bill::paginate(10);
        return view('adminthucong/Order', ['orders' => $order]);
    }
}
