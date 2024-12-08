<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // Hiển thị form login
    public function index()
    {
        return view('nhd-login'); // Trả về view 'login'
    }

    // Xử lý submit form
    public function loginSubmit(Request $request)
    {
        // Validate dữ liệu nhập vào
        $validationData = $request->validate([
            'email' => 'required|email',         // Email phải có định dạng hợp lệ
            'password' => 'required|min:6|max:12' // Password từ 6 đến 12 ký tự
        ]);

        // Lấy dữ liệu từ form
        $email = $request->input('email');
        $password = $request->input('password');

        // Tạm thời trả về kết quả nhập vào
        return "Email: $email, Password: $password";
    }
}
