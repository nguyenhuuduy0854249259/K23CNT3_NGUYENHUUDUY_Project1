<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\nhdsanpham;  
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
        return view('nhdadmins.nhdloaisanpham.nhd-create');
    }

    public function nhdCreateSubmit(Request $request)
{
    $validatedData = $request->validate([
        'nhdMaLoai' => 'required|string|unique:nhd_loai_san_pham,nhdMaLoai|max:255',
        'nhdTenLoai' => 'required|string|max:255',
        'nhdTrangThai' => 'required|in:0,1',
    ]);

    try {
        // Tạo loại sản phẩm mới
        $nhdloaiSanPham = new nhdloaisanpham;
        $nhdloaiSanPham->nhdMaLoai = $request->nhdMaLoai;
        $nhdloaiSanPham->nhdTenLoai = $request->nhdTenLoai;
        $nhdloaiSanPham->nhdTrangThai = $request->nhdTrangThai;
        $nhdloaiSanPham->save();

        return redirect()->route('nhdadims.nhdloaisanpham')
            ->with('success', 'Thêm loại sản phẩm mới thành công!');
    } catch (\Exception $e) {
        return back()->with('error', 'Có lỗi xảy ra: ' . $e->getMessage())->withInput();
    }
}


    public function nhdEdit($id)
    {
        // Retrieve the product by the primary key (id)
        $nhdloaisanpham = nhdloaisanpham::find($id);
    
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
        $nhdloaisanpham = nhdloaisanpham::find($request->id);
    
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
        $nhdloaisanpham = nhdloaisanpham::where('id', $id)->first();
        return view('nhdAdmins.nhdloaisanpham.nhd-detail',['nhdloaisanpham'=>$nhdloaisanpham]);

    }

    public function nhdDelete($id)
    {
        nhdloaisanpham::where('id',$id)->delete();
    return back()->with('loaisanpham_deleted','Đã xóa sinh viên thành công!');
    }
}
