<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nhdcthoadon; 
use App\Models\nhdsanpham; 
use App\Models\nhdhoadon; 

class nhdcthoadonController extends Controller
{
    //
      //admin CRUD
    // list -----------------------------------------------------------------------------------------------------------------------------------------
    public function nhdList()
    {
        $nhdcthoadon = nhdcthoadon::all();
        return view('nhdadmins.nhdcthoadon.nhd-list',['nhdcthoadon'=>$nhdcthoadon]);
    }
    // detail -----------------------------------------------------------------------------------------------------------------------------------------
    public function nhdDetail($id)
    {
        // Tìm sản phẩm theo ID
        $nhdcthoadon = nhdcthoadon::where('id', $id)->first();

        // Trả về view và truyền thông tin sản phẩm
        return view('nhdadmins.nhdcthoadon.nhd-detail', ['nhdcthoadon' => $nhdcthoadon]);
    }

     // create-----------------------------------------------------------------------------------------------------------------------------------------
     public function nhdCreate()
     {
         $nhdhoadon = nhdhoadon::all();
         $nhdsanpham = nhdsanpham::all();
         return view('nhdadmins.nhdcthoadon.nhd-create',['nhdhoadon'=>$nhdhoadon,'nhdsanpham'=>$nhdsanpham]);
     }
     //post-----------------------------------------------------------------------------------------------------------------------------------------
     public function nhdCreateSubmit(Request $request)
     {
         // Xác thực dữ liệu yêu cầu dựa trên các quy tắc xác thực
         $validate = $request->validate([
             'nhdHoaDonID' => 'required|exists:nhd_hoa_don,id',
             'nhdSanPhamID' => 'required|exists:nhd_san_pham,id',
             'nhdSoLuongMua' => 'required|numeric',  
             'nhdDonGiaMua' => 'required|numeric',
             'nhdThanhTien' => 'required|numeric',  
             'nhdTrangThai' => 'required|in:0,1,2',
         ]);
     
         // Tạo một bản ghi hóa đơn mới
         $nhdcthoadon = new nhdcthoadon;
     
         // Gán dữ liệu xác thực vào các thuộc tính của mô hình
         $nhdcthoadon->nhdHoaDonID = $request->nhdHoaDonID;
         $nhdcthoadon->nhdSanPhamID = $request->nhdSanPhamID;  
         $nhdcthoadon->nhdSoLuongMua = $request->nhdSoLuongMua;
         $nhdcthoadon->nhdDonGiaMua = $request->nhdDonGiaMua;
         $nhdcthoadon->nhdThanhTien = $request->nhdThanhTien;
         $nhdcthoadon->nhdTrangThai = $request->nhdTrangThai;
     
         // Lưu bản ghi mới vào cơ sở dữ liệu
         $nhdcthoadon->save();
     
         // Chuyển hướng đến danh sách hóa đơn
         return redirect()->route('nhdadmin.nhdcthoadon');
     }

      // edit-----------------------------------------------------------------------------------------------------------------------------------------
        public function nhdEdit($id)
    {
        $nhdhoadon = nhd_hoa_don::all(); // Lấy tất cả các hóa đơn
        $nhdsanpham = nhd_san_pham::all(); // Lấy tất cả các sản phẩm

        // Lấy chi tiết hóa đơn cần chỉnh sửa
        $nhdcthoadon = nhdcthoadon::where('id', $id)->first();

        if (!$nhdcthoadon) {
            // Nếu không tìm thấy chi tiết hóa đơn, chuyển hướng với thông báo lỗi
            return redirect()->route('nhdadmin.nhdcthoadon')->with('error', 'Không tìm thấy chi tiết hóa đơn!');
        }

        // Trả về view với dữ liệu
        return view('nhdadmins.nhdcthoadon.nhd-edit', [
            'nhdhoadon' => $nhdhoadon,
            'nhdsanpham' => $nhdsanpham,
            'nhdcthoadon' => $nhdcthoadon
        ]);
    }

      //post-----------------------------------------------------------------------------------------------------------------------------------------
      public function nhdEditSubmit(Request $request,$id)
      {
          // Xác thực dữ liệu yêu cầu dựa trên các quy tắc xác thực
          $validate = $request->validate([
              'nhdHoaDonID' => 'required|exists:nhd_hoa_don,id',
              'nhdSanPhamID' => 'required|exists:nhd_san_pham,id',
              'nhdSoLuongMua' => 'required|numeric',  
              'nhdDonGiaMua' => 'required|numeric',
              'nhdThanhTien' => 'required|numeric',  
              'nhdTrangThai' => 'required|in:0,1,2',
          ]);
         
      
          // Tạo một bản ghi hóa đơn mới
          $nhdcthoadon = nhdcthoadon::where('id', $id)->first();
      
          // Gán dữ liệu xác thực vào các thuộc tính của mô hình
          $nhdcthoadon->nhdHoaDonID = $request->nhdHoaDonID;
          $nhdcthoadon->nhdSanPhamID = $request->nhdSanPhamID;  
          $nhdcthoadon->nhdSoLuongMua = $request->nhdSoLuongMua;
          $nhdcthoadon->nhdDonGiaMua = $request->nhdDonGiaMua;
          $nhdcthoadon->nhdThanhTien = $request->nhdThanhTien;
          $nhdcthoadon->nhdTrangThai = $request->nhdTrangThai;
      
         
      
          // Lưu bản ghi mới vào cơ sở dữ liệu
          $nhdcthoadon->save();
      
          // Chuyển hướng đến danh sách hóa đơn
          return redirect()->route('nhdadmin.nhdcthoadon');
      }

        //delete
        public function nhdDelete($id)
        {
            nhdcthoadon::where('id',$id)->delete();
            return back()->with('cthoadon_deleted','Đã xóa Khách hàng thành công!');
        }
     
}