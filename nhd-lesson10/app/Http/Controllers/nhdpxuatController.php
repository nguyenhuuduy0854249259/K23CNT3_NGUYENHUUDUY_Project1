<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nhdpXuat; 
class nhdpxuatController extends Controller
{
    //
     //
     public function nhdlist()
     {
           $nhdpxuat = nhdpXuat::all();
           $nhdpxuat = nhdpXuat::paginate(10);  // Thay 10 bằng số lượng bạn muốn trên mỗi trang
           return view('nhdpxuat.list',['nhdpxuat'=>$nhdpxuat]);
     }
 
     public function nhddetail($SoPx)
     {
         $nhdpxuat = nhdpXuat::where('nhdSoPx',$SoPx)->first();
         return view('nhdpxuat.detail',['nhdpxuat'=>$nhdpxuat]);
     }
     public function nhdedit($SoPx)
     {
         // Lấy bản ghi nhdvattu dựa vào mã vật tư
         $nhdpxuat = nhdpXuat::where('nhdSoPx', $SoPx)->first();
 
         // Kiểm tra nếu vật tư không tồn tại, chuyển hướng về trang danh sách với thông báo lỗi
         if (!$nhdpxuat) {
             return redirect('/nhdpxuat')->with('error', 'Vật tư không tồn tại.');
         }
 
         return view('nhdpxuat.edit', ['nhdpxuat' => $nhdpxuat]);
     }
 
     public function nhdeditsubmit(Request $request, $SoPx)
     {
         // Kiểm tra dữ liệu nhập vào từ người dùng (validate)
         $request->validate([
             'ngayxuat' => 'required|date|max:255',
             'tenkh' => 'required|string|max:255',
            
         ]);
 
         // Lấy thông tin vật tư từ cơ sở dữ liệu
         $nhdpxuat = nhdpXuat::where('nhdSoPx', $SoPx)->first();
 
         // Kiểm tra nếu vật tư không tồn tại
         if (!$nhdpxuat) {
             return redirect('/nhdpxuat')->with('error', 'Vật tư không tồn tại.');
         }
 
         // Cập nhật thông tin vật tư
         $nhdpxuat->nhdNgayXuat = $request->ngayxuat;
         $nhdpxuat->nhdTenKH = $request->tenkh;
      
 
         // Lưu lại thông tin vật tư vào cơ sở dữ liệu
         $nhdpxuat->save();
 
         // Chuyển hướng và thông báo thành công
         return redirect('/nhdpxuat')->with('success', 'Thông tin vật tư đã được cập nhật.');
     }
 
     public function nhdcreate()
     {
         // Trả về view và truyền dữ liệu danh mục nếu cần
         return view('nhdpxuat.create');
     }
     
     public function nhdcreatesubmit(Request $request)
     {
         // Validate dữ liệu đầu vào
         $request->validate([
             'sopx' => 'required|unique:nhdpxuat,nhdSoPx', // Mã vật tư phải duy nhất
             'ngayxuat' => 'required|date|max:255',
             'tenkh' => 'required|string|max:255',
         ]);
     
         // Tạo một đối tượng mới của model nhdVattu
         $nhdpxuat = new nhdpXuat;
         $nhdpxuat->nhdSoPx = $request->sopx;
         $nhdpxuat->nhdNgayXuat = $request->ngayxuat;
         $nhdpxuat->nhdTenKH = $request->tenkh;
     
         // Lưu vật tư vào cơ sở dữ liệu
         $nhdpxuat->save();
     
         // Thông báo thành công khi thêm vật tư mới
         return redirect('/nhdpxuat')->with('success', 'Thông tin vật tư đã được thêm thành công.');
     }
     
 
     public function nhddelete($SoPx)
     {
        nhdpXuat::where('nhdSoPx',$SoPx)->delete();
     return back()->with('pxuat_deleted','Đã xóa sinh viên thành công!');
     }
}