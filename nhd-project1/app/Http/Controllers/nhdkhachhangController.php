<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nhdkhachhang; 
class nhdkhachhangController extends Controller
{
    //
    // CRUD
    // list
    public function nhdList()
    {
        $khachhangs = nhdkhachhang::all();
        return view('nhdadmins.nhdkhachhang.nhd-list',['khachhangs'=>$khachhangs]);
    }
    // detail 
    public function nhdDetail($id)
    {
        $nhdkhachhang = nhdkhachhang::where('id',$id)->first();
        return view('nhdadmins.nhdkhachhang.nhd-detail',['nhdkhachhang'=>$nhdkhachhang]);
    }
    // create
    public function nhdCreate()
    {
        return view('nhdadmins.nhdkhachhang.nhd-create');
    }
    //post
    public function nhdCreateSubmit(Request $request)
    {
        $validate = $request->validate([
            'nhdMaKhachHang' => 'required|unique:nhd_khach_hang,nhdMaKhachHang',
            'nhdHoTenKhachHang' => 'required|string',
            'nhdEmail' => 'required|email|unique:nhd_khach_hang,nhdEmail',  
            'nhdMatKhau' => 'required|min:6',
            'nhdDienThoai' => 'required|numeric|unique:nhd_khach_hang,nhdDienThoai',  
            'nhdDiaChi' => 'required|string',
            'nhdNgayDangKy' => 'required|date',  
            'nhdTrangThai' => 'required|in:0,1,2',
        ]);

        $nhdkhachhang = new nhdkhachhang;
        $nhdkhachhang->nhdMaKhachHang = $request->nhdMaKhachHang;
        $nhdkhachhang->nhdHoTenKhachHang = $request->nhdHoTenKhachHang;
        $nhdkhachhang->nhdEmail = $request->nhdEmail;
        $nhdkhachhang->nhdMatKhau = $request->nhdMatKhau;
        $nhdkhachhang->nhdDienThoai = $request->nhdDienThoai;
        $nhdkhachhang->nhdDiaChi = $request->nhdDiaChi;
        $nhdkhachhang->nhdNgayDangKy = $request->nhdNgayDangKy;
        $nhdkhachhang->nhdTrangThai = $request->nhdTrangThai;

        $nhdkhachhang->save();

        return redirect()->route('nhdadmins.nhdkhachhang');


    }

    // edit
    public function nhdEdit($id)
    {
        // Lấy khách hàng theo id
        $nhdkhachhang = nhdkhachhang::where('id', $id)->first();
    
        // Kiểm tra nếu khách hàng không tồn tại
        if (!$nhdkhachhang) {
            return redirect()->route('nhdadmins.nhdkhachhang')->with('error', 'Khách hàng không tồn tại!');
        }
    
        // Trả về view để chỉnh sửa khách hàng
        return view('nhdadmins.nhdkhachhang.nhd-edit', ['nhdkhachhang' => $nhdkhachhang]);
    }
    
    public function nhdEditSubmit(Request $request, $id)
    {
        // Xác thực dữ liệu
        $validate = $request->validate([
            'nhdMaKhachHang' => 'required|unique:nhd_khach_hang,nhdMaKhachHang,' . $id, // Bỏ qua kiểm tra unique cho bản ghi hiện tại
            'nhdHoTenKhachHang' => 'required|string',
            'nhdEmail' => 'required|email|unique:nhd_khach_hang,nhdEmail,' . $id,  // Bỏ qua kiểm tra unique cho bản ghi hiện tại
            'nhdMatKhau' => 'nullable|min:6', // Mật khẩu không bắt buộc khi cập nhật
            'nhdDienThoai' => 'required|numeric|unique:nhd_khach_hang,nhdDienThoai,' . $id,  // Bỏ qua kiểm tra unique cho bản ghi hiện tại
            'nhdDiaChi' => 'required|string',
            'nhdNgayDangKy' => 'required|date',
            'nhdTrangThai' => 'required|in:0,1,2',
        ]);
    
        // Lấy khách hàng theo id
        $nhdkhachhang = nhdkhachhang::where('id', $id)->first();
    
        // Kiểm tra nếu khách hàng không tồn tại
        if (!$nhdkhachhang) {
            return redirect()->route('nhdadmins.nhdkhachhang')->with('error', 'Khách hàng không tồn tại!');
        }
    
        // Cập nhật các giá trị từ request
        $nhdkhachhang->nhdMaKhachHang = $request->nhdMaKhachHang;
        $nhdkhachhang->nhdHoTenKhachHang = $request->nhdHoTenKhachHang;
        $nhdkhachhang->nhdEmail = $request->nhdEmail;
        $nhdkhachhang->nhdMatKhau = $request->nhdMatKhau;
        $nhdkhachhang->nhdDienThoai = $request->nhdDienThoai;
        $nhdkhachhang->nhdDiaChi = $request->nhdDiaChi;
        $nhdkhachhang->nhdNgayDangKy = $request->nhdNgayDangKy;
        $nhdkhachhang->nhdTrangThai = $request->nhdTrangThai;
    
        // Lưu khách hàng đã cập nhật
        $nhdkhachhang->save();
    
        // Chuyển hướng đến danh sách khách hàng
        return redirect()->route('nhdadmins.nhdkhachhang')->with('success', 'Cập nhật khách hàng thành công!');
    }
    
    //delete
    public function nhdDelete($id)
    {
        nhdkhachhang::where('id',$id)->delete();
        return back()->with('khachhang_deleted','Đã xóa Khách hàng thành công!');
    }

}