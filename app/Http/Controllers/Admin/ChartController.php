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
        //Thống Kê theo Ngày
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

        ///Thống Kê Theo Quý
        
        return view('adminthucong/chart', ['statisticalToday' => $statistical]);
        //return response()->json($statistical, 200);
    }

    public function StatisticalQuarter(){
        $quy1 = DB::table('bills')
            ->whereMonth('createAt', '>=', '1')
            ->whereMonth('createAt', '<=', '3')
            ->sum('totalPrice');
        $quy2 = DB::table('bills')
            ->whereMonth('createAt', '>=', '4')
            ->whereMonth('createAt', '<=', '6')
            ->sum('totalPrice');
        $quy3 = DB::table('bills')
            ->whereMonth('createAt', '>=', '7')
            ->whereMonth('createAt', '<=', '9')
            ->sum('totalPrice');
        $quy4 = DB::table('bills')
            ->whereMonth('createAt', '>=', '10')
            ->whereMonth('createAt', '<=', '12')
            ->sum('totalPrice');

        $ArrayQuy = array(0 => $quy1, 1 => $quy2, 2 => $quy3, 3 => $quy4);
        //return view('adminthucong/chart', ['statisticalToday' => $statistical]);
        return response()->json($ArrayQuy, 200);
    }

    public function StatisticalYear(){
        $nam = DB::table('bills')
        ->select(DB::raw('YEAR(createAt) year'),DB::raw('sum(totalPrice) total'))
        ->groupBy(DB::raw('YEAR(createAt)'))->get();
        return response()->json($nam, 200);
    }

    public function StatisticalMonth(){
        $ArrayMonth = array();
        for($i=1;$i<=12;$i++)
        {
            $total = DB::table('bills')
            ->whereMonth('createAt', '=', i)
            ->sum('totalPrice');
            $total = $total /1000;
            array_push($ArrayMonth,$total);
        }
        return response()->json($nam, 200);
    }
}
