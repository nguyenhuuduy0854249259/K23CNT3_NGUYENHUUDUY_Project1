<?php

namespace App\Http\Controllers;
use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Models\nhdsanpham; 
use App\Models\nhdkhachhang; 
class nhddanhsachquantriController extends Controller
{
    //
        // Danh mục
        public function danhmuc()
        {
            // Truy vấn số lượng sản phẩm
            $productCount = nhdsanpham::count();
        
            // Truy vấn số lượng người dùng
            $userCount = nhdkhachhang::count();

        
            // Trả về view và truyền cả productCount và userCount
            return view('nhdadmins.nhddanhsachquantri.nhddanhmuc', compact('productCount', 'userCount'));
        }

        public function nguoidung()
        {
            $nhdnguoidung = nhdkhachhang::all();
        
            // Chuyển đổi nhdNgayDangKy thành đối tượng Carbon thủ công
            foreach ($nhdnguoidung as $user) {
                // Chuyển đổi ngày tháng thành đối tượng Carbon nếu chưa phải là Carbon
                $user->nhdNgayDangKy = Carbon::parse($user->nhdNgayDangKy);
            }
        
            return view('nhdadmins.nhddanhsachquantri.nhddanhmuc.nhdnguoidung', ['nhdnguoidung' => $nhdnguoidung]);
        }
        

    // tin tức
    public function tintuc()
    {
        
        $nhdsanphams = nhdsanpham::all();
        return view('nhdadmins.nhddanhsachquantri.nhddanhmuc.nhdtintuc',['nhdsanphams'=>$nhdsanphams]);
    }

    // Hiển thị danh sách sản phẩm
    public function sanpham()
    {
        $nhdsanphams = nhdsanpham::all(); // Lấy tất cả sản phẩm
        return view('nhdadmins.nhddanhsachquantri.nhddanhmuc.nhdsanpham', ['nhdsanphams' => $nhdsanphams]);
    }

    // Hiển thị mô tả chi tiết sản phẩm
    public function mota($id)
    {
        // Lấy sản phẩm theo id
        $product = nhdsanpham::find($id);
        
        // Kiểm tra nếu sản phẩm không tồn tại
        if (!$product) {
            return redirect()->route('nhdadmins.nhddanhsachquantri.danhmuc.sanpham')
                             ->with('error', 'Sản phẩm không tồn tại.');
        }

        // Trả về view với thông tin sản phẩm
        return view('nhdadmins.nhddanhsachquantri.nhddanhmuc.nhdmota', ['product' => $product]);
    }
}