<?php

namespace App\Http\Controllers\Admin;

use App\Models\QuantityStatistics;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    public function index()
    {
        $format = "Y-m-d";
        $timestamp = time();
        $strTime = date($format, $timestamp);
        $quantity = DB::table('detail_bills')
            ->join('bills', 'billId', '=', 'id')
            ->where('createAt', '=', $strTime)
            ->count();
        $total = DB::table('bills')
            ->where('createAt', '=', $strTime)
            ->sum('totalPrice');
        $orderwait = DB::table('bills')
            ->where('status', '=', '0')
            ->count();
        $statistical = new QuantityStatistics($quantity, $total, $orderwait);
        //return view('adminthucong/chart', ['statisticalToday' => $statistical]);
        return response()->json($statistical->getOrderWatting(), 200);
    }
}
