<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  // CHÚ Ý, CÓ NÀY MỚI TRUY CẬP ĐC DB:


class nhdMonHocController extends Controller
{
    //list mon hoc
    public function nhdlist()
    {
        $nhdmonhoc = DB::table('nhdmonhoc')->get();
        return view('nhdmonhoc.nhdlist',['nhdmonhoc'=>$nhdmonhoc]);
    }
    // Đọc chi tiết thông tin môn học theo mã môn
    public function getMonHocById($nhdmonhoc)
    {
        $nhdmonhoc = DB::table('nhdmonhoc')->where('NHDMAMH',$nhdmonhoc)->first();
        return view('nhdmonhoc.nhddetail',['nhdmonhoc'=>$nhdmonhoc]);
    }
    // Create Form
    public function nhdcreate()
    {
        return view('nhdmonhoc.nhdcreate');
    }
    // Thêm phương thức createSubmit nếu chưa có
    public function nhdcreateSubmit(Request $request)
    {
        // Logic xử lý dữ liệu từ form
        DB::table('nhdmonhoc')->where('NHDMAMH',$request->NHDMAMH)
                    ->update
        ([

            'NHDMAMH' =>$request->NHDMAMH,
            'NHDTENMH' =>$request->NHDTENMH,
            'NHDSOTIET' =>$request->NHDSOTIET,
        ]);
        return redirect('/monhoc');
    }
}
