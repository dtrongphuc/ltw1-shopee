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
            ->join('bills', 'detail_bills.billId', '=', 'bills.id')
            ->where('bills.createAt', '=', $strTime)
            ->where('bills.status', '=', '4')
            ->count();
        $total = DB::table('bills')
            ->where('createAt', '=', $strTime)
            ->where('status', '=', '4')
            ->sum('totalPrice');
        $orderwait = DB::table('bills')
            ->where('createAt', '=', $strTime)
            ->where('status', '=', '0')
            ->count();
        $statistical = new QuantityStatistics($quantity, $total, $orderwait);
        // //return response()->json($statistical, 200);

        //thống kê theo năm
        $data = DB::table('bills')
            ->select(DB::raw('YEAR(createAt) year'), DB::raw('sum(totalPrice) total'))
            ->where('status', '=', '4')
            ->groupBy(DB::raw('YEAR(createAt)'))->get();

        $array[] = ['year', 'total'];
        foreach ($data as $key => $value) {
            $array[++$key] = [(string)$value->year, (float)$value->total];
        }
        return view('Admin/chart')->with('year', json_encode($array))->with('statisticalToday', $statistical);
        //return response()->json($quantity, 200);
    }

    //thống kê theo quý
    public function StatisticalQuarter()
    {
        $format = "Y";
        $timestamp = time();
        $strTime = date($format, $timestamp);
        $quy1 = DB::table('bills')
            ->whereMonth('createAt', '>=', '1')
            ->whereMonth('createAt', '<=', '3')
            ->whereYear('createAt', '=', $strTime)
            ->where('status', '=', '4')
            ->sum('totalPrice');
        $quy2 = DB::table('bills')
            ->whereMonth('createAt', '>=', '4')
            ->whereMonth('createAt', '<=', '6')
            ->whereYear('createAt', '=', $strTime)
            ->where('status', '=', '4')
            ->sum('totalPrice');
        $quy3 = DB::table('bills')
            ->whereMonth('createAt', '>=', '7')
            ->whereMonth('createAt', '<=', '9')
            ->whereYear('createAt', '=', $strTime)
            ->where('status', '=', '4')
            ->sum('totalPrice');
        $quy4 = DB::table('bills')
            ->whereMonth('createAt', '>=', '10')
            ->whereMonth('createAt', '<=', '12')
            ->whereYear('createAt', '=', $strTime)
            ->where('status', '=', '4')
            ->sum('totalPrice');

        $ArrayQuy = array(0 => $quy1, 1 => $quy2, 2 => $quy3, 3 => $quy4);
        //return view('adminthucong/chart', ['statisticalToday' => $statistical]);
        return response()->json($ArrayQuy, 200);
    }

    // //thống kê theo năm
    // public function StatisticalYear()
    // {
    //     $data = DB::table('bills')
    //         ->select(DB::raw('YEAR(createAt) year'), DB::raw('sum(totalPrice) total'))
    //         ->where('status', '=', '4')
    //         ->groupBy(DB::raw('YEAR(createAt)'))->get();

    //     $nam[] = ['year', 'number'];
    //     foreach ($data as $key => $value) {
    //         $array[++$key] = [$value->year, $value->number];
    //     }

    //     return response()->json($nam, 200);
    // }

    public function StatisticalMonth()
    {
        $format = "Y";
        $timestamp = time();
        $strTime = date($format, $timestamp);
        $ArrayMonth = array();
        for ($i = 1; $i <= 12; $i++) {
            $total = DB::table('bills')
                ->whereMonth('createAt', '=', $i)
                ->whereYear('createAt', '=', $strTime)
                ->where('status', '=', '4')
                ->sum('totalPrice');
            $total = $total / 1000;
            array_push($ArrayMonth, $total);
        }
        return response()->json($ArrayMonth, 200);
    }
}
