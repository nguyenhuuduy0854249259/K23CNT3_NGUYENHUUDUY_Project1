<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\nhdNhaCC;


class nhdNhaCCController extends Controller
{
        // list, create, edit, delete
    public function nhdlist(){
        //lấy dữ liệu từ DB thông qua ORM
        $nhdnhacc = nhdNhaCC::all();
        $nhdnhacc = nhdNhaCC::paginate(10);
        // Return the data to the view
        return view('nhdNhaCC.list', ['nhdNhaCC' => $nhdnhacc]);
    }


     // Chi tiết Nhà Cung Cấp
     public function nhddetail($manhacc)
     {
         // Tìm Nhà Cung Cấp theo mã Nhà Cung Cấp (nhdMaNCC)
         $nhdnhacc = nhdNhaCC::where('nhdMaNCC', $manhacc)->first();      
         // Trả về view với dữ liệu chi tiết Nhà Cung Cấp
         return view('nhdNhaCC.detail', ['nhdnhacc' => $nhdnhacc]);
     }


     public function nhdedit($manhacc) {
        // Tìm Nhà Cung Cấp theo mã Nhà Cung Cấp (nhdMaNCC)
        $nhdnhacc = nhdNhaCC::where('nhdMaNCC', $manhacc)->first();       
        // Nếu không tìm thấy Nhà Cung Cấp, trả về thông báo lỗi
        if (!$nhdnhacc) {
            return redirect()->route('nhdnhacc.index')->with('error', 'Nhà Cung Cấp không tồn tại!');
        }
        // Trả về view sửa thông tin Nhà Cung Cấp với dữ liệu tìm được
        return view('nhdNhaCC.edit', ['nhdnhacc' => $nhdnhacc]);
    }



    // Xử lý cập nhật thông tin Nhà Cung Cấp
    public function nhdeditsubmit(Request $request, $manhacc) {
        // Kiểm tra và xác thực dữ liệu gửi lên
        $validatedData = $request->validate([
            'tenncc' => 'required|string|max:255',   // Kiểm tra 'tenncc' phải có giá trị, là chuỗi và có độ dài tối đa 255 ký tự
            'diachi' => 'required|string|max:255',   // Tương tự với 'diachi'
            'dienthoai' => 'required|string|max:20', // Kiểm tra 'dienthoai' phải là chuỗi và không vượt quá 20 ký tự
            'status' => 'required|string|max:50',    // 'status' phải có giá trị, là chuỗi và có độ dài tối đa 50 ký tự
            'email' => 'required|email|max:255',     // 'email' phải là định dạng email hợp lệ và có độ dài tối đa 255 ký tự
        ]);

        // Tìm Nhà Cung Cấp theo mã Nhà Cung Cấp (nhdMaNCC)
        $nhdnhacc = nhdNhaCC::where('nhdMaNCC', $manhacc)->first();
        
        // Nếu không tìm thấy Nhà Cung Cấp, trả về thông báo lỗi
        if (!$nhdnhacc) {
            return redirect()->route('nhdNhaCC.index')->with('error', 'Nhà Cung Cấp không tồn tại!');
        }

        // Cập nhật các thông tin Nhà Cung Cấp từ dữ liệu đã xác thực
        $nhdnhacc->nhdTenNCC = $request->tenncc;
        $nhdnhacc->nhdDiaChi = $request->diachi;
        $nhdnhacc->nhdDienThoai = $request->dienthoai;
        $nhdnhacc->nhdStatus = $request->status;
        $nhdnhacc->nhdEmail = $request->email;
        // Lưu lại thông tin đã cập nhật vào cơ sở dữ liệu
        $nhdnhacc->save();
        // Chuyển hướng về trang danh sách và hiển thị thông báo thành công
        return redirect('/nhdnhacc')->with('success', 'Thông tin nhà cung cấp đã được cập nhật.');
    }

    //create
    public function nhdcreate()
    {
        // Trả về view form thêm mới
        return view('nhdNhaCC.create');
    }

    // Xử lý lưu thông tin nhà cung cấp mới
    public function nhdcreatesubmit(Request $request)
    {
        // Xác thực dữ liệu gửi lên
        $validatedData = $request->validate([
            'mancc' => 'required|string|max:20|unique:nhdnhacc,nhdMaNCC', // Validate Mã Nhà Cung Cấp (tùy chỉnh)
            'tenncc' => 'required|string|max:255',
            'diachi' => 'required|string|max:255',
            'dienthoai' => 'required|string|max:20',
            'status' => 'required|string|max:50',
            'email' => 'required|email|max:255',
        ]);
        // Tạo mới nhà cung cấp
        $nhdnhacc = new nhdNhaCC();
        $nhdnhacc->nhdMaNCC = $request->mancc; // Gán Mã Nhà Cung Cấp
        $nhdnhacc->nhdTenNCC = $request->tenncc;
        $nhdnhacc->nhdDiaChi = $request->diachi;
        $nhdnhacc->nhdDienThoai = $request->dienthoai;
        $nhdnhacc->nhdStatus = $request->status;
        $nhdnhacc->nhdEmail = $request->email;
    
        // Lưu thông tin mới
        $nhdnhacc->save();
    
        // Chuyển hướng về trang danh sách với thông báo thành công
        return redirect('/nhdnhacc')->with('success', 'Nhà cung cấp mới đã được thêm.');
    }
    // delete
    public function nhddelete($manhacc)
    {
        nhdNhaCC::where('nhdMaNCC',$manhacc)->delete();
        return back()->with('nhdnhacc_deleted','Đã xóa sinh viên thành công!');
    }

}
