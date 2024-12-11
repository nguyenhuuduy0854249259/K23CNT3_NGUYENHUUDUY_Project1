<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class nhdKhoaController extends Controller
{
    //
    public function nhdGetAllkhoa()
    {
    //đọc dữ liệu từ bản khoa
    $nhdkhoa = DB::select('select * from nhdkhoa');
    // chuyển dữ kiệu lên view
    return view('nhdkhoa.nhdlist',['nhdkhoa'=>$nhdkhoa]);
    }
    // chi tiết khoa
    public function nhdGetKhoa($makhoa)
    {
        $nhdkhoa = DB::select("select * from nhdkhoa where NHDMAKH=?",[$makhoa])[0];
        return view('nhdkhoa.nhdDetail',['nhdkhoa'=>$nhdkhoa]);
    }
    //edit
    public function nhdEdit($nhdmakh)
    {
        $khoa = DB::select("select * from nhdkhoa where NHDMAKH=?",[$nhdmakh])[0];
        return view('nhdkhoa.nhdEdit',['nhdkhoa'=>$khoa]);
    }

     //edit submit
     public function nhdEditSubmit(Request $request)
    {
        // lấy dữ liệu mới
        $makh = $request->input('NHDMAKH');
        $tenkh = $request->input('NHDTENKH');
        DB::update("UPDATE nhdkhoa set NHDTENKH = ? where NHDMAKH = ?", [$tenkh, $makh]);
        return redirect('/khoa');
    }


    // delete 

    public function nhdDelete($nhdmakh)
    {
        $khoa = DB::select("select * from nhdkhoa where NHDMAKH=?",[$nhdmakh])[0];
        return view('nhdkhoa.nhdDelete',['nhdkhoa'=>$khoa]);
    }

     //delete submit
     public function nhdDeleteSubmit(Request $request)
    {
        // lấy dữ liệu mới
        $makh = $request->input('NHDMAKH');
        DB::DELETE("DELETE FROM nhdkhoa where NHDMAKH = ?", [$makh]);
        return redirect('/khoa');
    }

    // Create Form
    public function create()
    {
    return view('nhdkhoa.create');
    }


   // CreateSubmit
    public function createSubmit(Request $request)
    {
        DB::insert('insert into nhdkhoa(NHDMAKH, NHDTENKH) values(?,?)',
        [$request->NHDMAKH,$request->NHDTENKH]);
        return redirect('/khoa');
    }
}
