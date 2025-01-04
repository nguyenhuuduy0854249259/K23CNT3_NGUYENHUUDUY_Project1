<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nhdhoadon; 
use App\Models\nhdkhachhang; 
class nhdhoadonController extends Controller
{
    //
      //admin CRUD
    // list -----------------------------------------------------------------------------------------------------------------------------------------
    public function nhdList()
    {
        $nhdhoadons = nhdhoadon::all();
        return view('nhdadmins.nhdhoadon.nhd-list',['nhdhoadons'=>$nhdhoadons]);
    }
    // detail -----------------------------------------------------------------------------------------------------------------------------------------
    public function nhdDetail($id)
    {
        // Tìm sản phẩm theo ID
        $nhdhoadon = nhdhoadon::where('id', $id)->first();

        // Trả về view và truyền thông tin sản phẩm
        return view('nhdadmins.nhdhoadon.nhd-detail', ['nhdhoadon' => $nhdhoadon]);
    }
    // create
    public function nhdCreate()
    {
        $nhdkhachhang = nhdkhachhang::all();
        return view('nhdadmins.nhdhoadon.nhd-create',['nhdkhachhang'=>$nhdkhachhang]);
    }
    //post
    public function nhdCreateSubmit(Request $request)
    {
        // Xác thực dữ liệu yêu cầu dựa trên các quy tắc xác thực
        $validate = $request->validate([
            'nhdMaHoaDon' => 'required|unique:nhd_hoa_don,nhdMaHoaDon',
            'nhdMaKhachHang' => 'required|exists:nhd_khach_hang,id',
            'nhdNgayHoaDon' => 'required|date',  
            'nhdNgayNhan' => 'required|date',
            'nhdHoTenKhachHang' => 'required|string',  
            'nhdEmail' => 'required|email',
            'nhdDienThoai' => 'required|numeric',  
            'nhdDiaChi' => 'required|string',  
            'nhdTongGiaTri' => 'required|numeric',  // Đã thay đổi thành numeric (cho kiểu double)
            'nhdTrangThai' => 'required|in:0,1,2',
        ]);
    
        // Tạo một bản ghi hóa đơn mới
        $nhdhoadon = new nhdhoadon;
    
        // Gán dữ liệu xác thực vào các thuộc tính của mô hình
        $nhdhoadon->nhdMaHoaDon = $request->nhdMaHoaDon;
        $nhdhoadon->nhdMaKhachHang = $request->nhdMaKhachHang;  // Giả sử đây là khóa ngoại
        $nhdhoadon->nhdHoTenKhachHang = $request->nhdHoTenKhachHang;
        $nhdhoadon->nhdEmail = $request->nhdEmail;
        $nhdhoadon->nhdDienThoai = $request->nhdDienThoai;
        $nhdhoadon->nhdDiaChi = $request->nhdDiaChi;
        
        // Lưu 'nhdTongGiaTri' dưới dạng float (hoặc double) để phù hợp với kiểu dữ liệu trong cơ sở dữ liệu
        $nhdhoadon->nhdTongGiaTri = (double) $request->nhdTongGiaTri; // Chuyển đổi sang double
        
        $nhdhoadon->nhdTrangThai = $request->nhdTrangThai;
    
        // Đảm bảo định dạng đúng cho các trường ngày
        $nhdhoadon->nhdNgayHoaDon = $request->nhdNgayHoaDon;
        $nhdhoadon->nhdNgayNhan = $request->nhdNgayNhan;
    
        // Lưu bản ghi mới vào cơ sở dữ liệu
        $nhdhoadon->save();
    
        // Chuyển hướng đến danh sách hóa đơn
        return redirect()->route('nhdadmins.nhdhoadon');
    }
    


    public function nhdEdit($id)
    {
        $nhdhoadon = nhdhoadon::where('id', $id)->first();
        $nhdkhachhang = nhdkhachhang::all();
        return view('nhdadmins.nhdhoadon.nhd-edit',['nhdkhachhang'=>$nhdkhachhang,'nhdhoadon'=>$nhdhoadon]);
    }
    //post
    public function nhdEditSubmit(Request $request,$id)
    {
        // Xác thực dữ liệu yêu cầu dựa trên các quy tắc xác thực
        $validate = $request->validate([
            'nhdMaHoaDon' => 'required|unique:nhd_hoa_don,nhdMaHoaDon,'. $id,
            'nhdMaKhachHang' => 'required|exists:nhd_khach_hang,id',
            'nhdNgayHoaDon' => 'required|date',  
            'nhdNgayNhan' => 'required|date',
            'nhdHoTenKhachHang' => 'required|string',  
            'nhdEmail' => 'required|email',
            'nhdDienThoai' => 'required|numeric',  
            'nhdDiaChi' => 'required|string',  
            'nhdTongGiaTri' => 'required|numeric', 
            'nhdTrangThai' => 'required|in:0,1,2',
        ]);
    
        $nhdhoadon = nhdhoadon::where('id', $id)->first();
        // Gán dữ liệu xác thực vào các thuộc tính của mô hình
        $nhdhoadon->nhdMaHoaDon = $request->nhdMaHoaDon;
        $nhdhoadon->nhdMaKhachHang = $request->nhdMaKhachHang;  // Giả sử đây là khóa ngoại
        $nhdhoadon->nhdHoTenKhachHang = $request->nhdHoTenKhachHang;
        $nhdhoadon->nhdEmail = $request->nhdEmail;
        $nhdhoadon->nhdDienThoai = $request->nhdDienThoai;
        $nhdhoadon->nhdDiaChi = $request->nhdDiaChi;
        
        // Lưu 'nhdTongGiaTri' dưới dạng float (hoặc double) để phù hợp với kiểu dữ liệu trong cơ sở dữ liệu
        $nhdhoadon->nhdTongGiaTri = (double) $request->nhdTongGiaTri; // Chuyển đổi sang double
        
        $nhdhoadon->nhdTrangThai = $request->nhdTrangThai;
    
        // Đảm bảo định dạng đúng cho các trường ngày
        $nhdhoadon->nhdNgayHoaDon = $request->nhdNgayHoaDon;
        $nhdhoadon->nhdNgayNhan = $request->nhdNgayNhan;
    
        // Lưu bản ghi mới vào cơ sở dữ liệu
        $nhdhoadon->save();
    
        // Chuyển hướng đến danh sách hóa đơn
        return redirect()->route('nhdadmins.nhdhoadon');
    }
    
        //delete
        public function nhdDelete($id)
        {
            nhdhoadon::where('id',$id)->delete();
            return back()->with('nhdhoadon_deleted','Đã xóa Khách hàng thành công!');
        }
}