<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class nhdSessionController extends Controller
{
    //Đọc dữ liệu từ session
    public function nhdGetSessionData(Request $request)
    {
        if($request->session()->has("K23CNT3-NguyenHuuDuy"))
        {
            echo "<h2> session Data:". $request->session()->get("K23CNT3-NguyenHuuDuy");
        }else{
            echo "<h2> không có dữ liệu trong Get session </h2>"; 
        }
    }
    // Ghi dư liệu vào session
    public function nhdStoreSessionData(Request $request)
    {
        $request->session()->put('K23CNT3-NguyenHuuDuy', 'k23CNT3 - Nguyễn Hữu Duy - 2310900019');
        echo "<h2> Dữ liệu đã được lưu vào Store session </h2>";
    }

    // xóa dữ liệu trong session
    public function nhdDeleteSessionData(Request $request)
    {
        $request->session()->forget('K23CNT3-NguyenHuuDuy');
        echo "<h2> Dữ liệu đã được xóa khỏi Delete session </h2>";
    }
}
