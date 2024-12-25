<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\nhdloaisanpham; // Sử dụng Model User để thao tác với cơ sở dữ liệu

class nhdloaisanphamController extends Controller
{
    //
    public function nhdList()
    {
        $nhdloaisanpham = nhdloaisanpham::all();
        return view('nhdAdmins.nhdloaisanpham.nhd-list',['nhdloaisanpham'=>$nhdloaisanpham]);
    }


    //create
    public function nhdCreate()
    {
        return view('nhdAdmins.nhdloaisanpham.nhd-create');
    }

    public function nhdCreateSunmit(Request $request)
    {
        $validatedData = $request->validate([
            'nhdMaLoai' => 'required|unique:nhd_LOAI_SAN_PHAM,nhdMaLoai',  // Kiểm tra mã loại không trống và duy nhất
            'nhdTenLoai' => 'required|string|max:255',  // Kiểm tra tên loại không trống và là chuỗi
            'nhdTrangThai' => 'required|in:0,1',  // Trạng thái phải là 0 hoặc 1
        ]);
        //ghi dữ liệu xuống db
        $nhdloaisanpham = new nhd_LOAI_SAN_PHAM;
        $nhdloaisanpham->nhdMaLoai = $request->nhdMaLoai;
        $nhdloaisanpham->nhdTenLoai = $request->nhdTenLoai;
        $nhdloaisanpham->nhdTrangThai = $request->nhdTrangThai;

        $nhdloaisanpham->save();
       return redirect()->route('nhdadims.nhdloaisanpham');
    }

    public function nhdEdit($id)
    {
        // Retrieve the product by the primary key (id)
        $nhdloaisanpham = nhd_LOAI_SAN_PHAM::find($id);
    
        // If the product does not exist, redirect with an error message
        if (!$nhdloaisanpham) {
            return redirect()->route('nhdadims.nhdloaisanpham')->with('error', 'Loại sản phẩm không tồn tại.');
        }
    
        // Pass the product data to the edit view
        return view('nhdAdmins.nhdloaisanpham.nhd-edit', ['nhdloaisanpham' => $nhdloaisanpham]);
    }
    
    public function nhdEditSubmit(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'nhdMaLoai' => 'required|string|max:255|unique:nhd_LOAI_SAN_PHAM,nhdMaLoai,' . $request->id,  // Bỏ qua nhdMaLoai của bản ghi hiện tại
            'nhdTenLoai' => 'required|string|max:255',   
            'nhdTrangThai' => 'required|in:0,1',  // Validation for nhdTrangThai (0 or 1)
        ]);
    
        // Find the product by id
        $nhdloaisanpham = nhd_LOAI_SAN_PHAM::find($request->id);
    
        // Check if the product exists
        if (!$nhdloaisanpham) {
            return redirect()->route('nhdadims.nhdloaisanpham')->with('error', 'Loại sản phẩm không tồn tại.');
        }
    
        // Update the product with validated data
        $nhdloaisanpham->nhdMaLoai = $request->nhdMaLoai;
        $nhdloaisanpham->nhdTenLoai = $request->nhdTenLoai;
        $nhdloaisanpham->nhdTrangThai = $request->nhdTrangThai;
    
        // Save the updated product
        $nhdloaisanpham->save();
    
        // Redirect back to the list page with a success message
        return redirect()->route('nhdadims.nhdloaisanpham')->with('success', 'Cập nhật loại sản phẩm thành công.');
    }
    
    

    public function nhdGetDetail($id)
    {
        $nhdloaisanpham = nhd_LOAI_SAN_PHAM::where('id', $id)->first();
        return view('nhdAdmins.nhdloaisanpham.nhd-detail',['nhdloaisanpham'=>$nhdloaisanpham]);

    }

    public function nhdDelete($id)
    {
        nhd_LOAI_SAN_PHAM::where('id',$id)->delete();
    return back()->with('loaisanpham_deleted','Đã xóa sinh viên thành công!');
    }
}
