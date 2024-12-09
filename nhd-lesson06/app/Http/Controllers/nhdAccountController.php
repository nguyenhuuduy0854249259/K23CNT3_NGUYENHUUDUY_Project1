<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class nhdAccountController extends Controller
{
    //form login - get
    public function nhdlogin(){
        return view('nhd-login');
    }

    //form login - post(khi đăng nhập)
    /*
    kiểm tra email, mật khẩu không để trống
    nếu email=ngd@gmail.com vs pass=123456a@ thì lưu thông thông tin vào sesion
    với tên như vd trc
    */
    public function nhdLoginSubmit (Request $request)
    {
        $validation = $request->validate([
            'nhdEmail' => 'required|email',
            'nhdPass' => 'required|min:6',
        ]);        
        
        $nhdEmail = $request->input('nhdEmail');
        $nhdPass = $request->input('nhdPass');

        $nhdLoginSession = [
            'nhdEmail' =>$nhdEmail,
            'nhdPass' =>$nhdPass
        ];
               
        $nhd_json = json_encode($nhdLoginSession);

        if($nhdEmail == "nhd@gmail.com" && $nhdPass == "123456a@")
        {
            // luu session
            $request->session()->put('K23CNT3-NguyenHuuDuy', $nhdEmail);
            return redirect('/');
        }
        return redirect()->back()->with('nhd-error', 'Lỗi đăng nhập');

    }
    // nhd logout
    public function nhdLogout(Request $request)
    {
        $request->session()->forget('K23CNT3-NguyenHuuDuy');
        return redirect('/');
    }
   
}

