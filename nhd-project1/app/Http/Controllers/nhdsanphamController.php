<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nhdsanpham; 
use App\Models\nhdloaisanpham; // Sử dụng Model User để thao tác với cơ sở dữ liệu
use Illuminate\Support\Facades\Storage;  // Use this for file handling

class nhdsanphamController extends Controller
{
    //
     //admin CRUD
    // list -----------------------------------------------------------------------------------------------------------------------------------------
    public function nhdList()
    {
        $nhdsanphams = nhdsanpham::where('nhdTrangThai',0)->get();
        return view('nhdadmins.nhdsanpham.nhd-list',['nhdsanphams'=>$nhdsanphams]);
    } 


    // detail -----------------------------------------------------------------------------------------------------------------------------------------
    public function nhdDetail($id)
{
    // Tìm sản phẩm theo ID
    $nhdsanpham = nhdsanpham::where('id', $id)->first();
    // Kiểm tra nếu không tìm thấy sản phẩm
    if (!$nhdsanpham) {
        return redirect()->route('nhdadims.nhdsanpham')->with('error', 'Sản phẩm không tồn tại!');
    }
    // Trả về view và truyền thông tin sản phẩm
    return view('nhdadmins.nhdsanpham.nhd-detail', ['nhdsanpham' => $nhdsanpham]);
}

      //create  -----------------------------------------------------------------------------------------------------------------------------------------
      public function nhdCreate()
    {
        // Đọc dữ liệu từ nhd_loai_san_pham
        $nhdloaisanpham = nhdloaisanpham::all();
        return view('nhdadmins.nhdsanpham.nhd-create', ['nhdloaisanpham' => $nhdloaisanpham]);
    }

     // Controller
     public function nhdCreateSubmit(Request $request)
     {
         // Validate input
         $validatedData = $request->validate([
             'nhdMaSanPham' => 'required|unique:nhd_san_pham,nhdMaSanPham',
             'nhdTenSanPham' => 'required|string|max:255',
             'nhdHinhAnh' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:10240', // Kiểm tra hình ảnh và loại định dạng
             'nhdSoLuong' => 'required|numeric|min:1',
             'nhdDonGia' => 'required|numeric',
             'nhdMaLoai' => 'required|exists:nhd_loai_san_pham,id',
             'nhdTrangThai' => 'required|in:0,1',
         ]);
     
         // Khởi tạo đối tượng nhd_SAN_PHAM và lưu thông tin vào cơ sở dữ liệu
         $nhdsanpham = new nhdsanpham;
         $nhdsanpham->nhdMaSanPham = $request->nhdMaSanPham;
         $nhdsanpham->nhdTenSanPham = $request->nhdTenSanPham;
     
         // Kiểm tra nếu có tệp hình ảnh
         if ($request->hasFile('nhdHinhAnh')) {
             $file = $request->file('nhdHinhAnh');
             
             // Check MIME type of the file (optional, already validated)
             $mimeType = $file->getMimeType();
             dd($mimeType); // Bạn có thể kiểm tra loại MIME của tệp
             
             if ($file->isValid()) {
                 // Proceed with storing the file
                 $fileName = $request->nhdMaSanPham . '.' . $file->extension();
                 $file->storeAs('public/img/san_pham', $fileName); // Lưu trong thư mục storage/public
                 $nhdsanpham->nhdHinhAnh = 'img/san_pham/' . $fileName; // Lưu đường dẫn hình ảnh vào cơ sở dữ liệu
             } else {
                 dd("File is not valid"); // Debugging
             }
         }
     
         // Lưu các thông tin còn lại vào cơ sở dữ liệu
         $nhdsanpham->nhdSoLuong = $request->nhdSoLuong;
         $nhdsanpham->nhdDonGia = $request->nhdDonGia;
         $nhdsanpham->nhdMaLoai = $request->nhdMaLoai;
         $nhdsanpham->nhdTrangThai = $request->nhdTrangThai;
     
         // Lưu dữ liệu vào cơ sở dữ liệu
         $nhdsanpham->save();

        // Chuyển hướng người dùng về trang danh sách sản phẩm
        return redirect()->route('nhdadims.nhdsanpham');
    }

    //delete    -----------------------------------------------------------------------------------------------------------------------------------------

    public function nhddelete($id)
    {
        nhdsanpham::where('id',$id)->delete();
    return back()->with('sanpham_deleted','Đã xóa sinh viên thành công!');
    }

    // edit -----------------------------------------------------------------------------------------------------------------------------------------
    public function nhdEdit($id)
        {
        // Tìm sản phẩm theo ID
        $nhdsanpham = nhdsanpham::findOrFail($id);

        // Lấy tất cả các loại sản phẩm từ bảng nhdloaisanpham
        $nhdloaisanpham = nhdloaisanpham::all();

        // Trả về view với dữ liệu sản phẩm và loại sản phẩm
        return view('nhdadmins.nhdsanpham.nhd-edit', [
            'nhdsanpham' => $nhdsanpham,
            'nhdloaisanpham' => $nhdloaisanpham
        ]);
        }

        // Phương thức xử lý dữ liệu form chỉnh sửa sản phẩm


        public function nhdEditSubmit(Request $request, $id)
    {
        // Validate dữ liệu
        $validatedData = $request->validate([
            'nhdMaSanPham' => 'required|unique:nhd_san_pham,nhdMaSanPham',
            'nhdTenSanPham' => 'required|string|max:255',
            'nhdHinhAnh' => 'required|image|mimes:jpeg,png,jpg,gif,svg,ưebp|max:10240', // Check that the file is an image
            'nhdSoLuong' => 'required|numeric|min:1',
            'nhdDonGia' => 'required|numeric',
            'nhdMaLoai' => 'required|exists:nhd_loai_san_pham,id',
            'nhdTrangThai' => 'required|in:0,1',
        ]);
        

        // Tìm sản phẩm cần chỉnh sửa
        $nhdsanpham = nhdsanpham::findOrFail($id);

        // Cập nhật thông tin sản phẩm
        $nhdsanpham->nhdMaSanPham = $request->nhdMaSanPham;
        $nhdsanpham->nhdTenSanPham = $request->nhdTenSanPham;
        $nhdsanpham->nhdSoLuong = $request->nhdSoLuong;
        $nhdsanpham->nhdDonGia = $request->nhdDonGia;
        $nhdsanpham->nhdMaLoai = $request->nhdMaLoai;
        $nhdsanpham->nhdTrangThai = $request->nhdTrangThai;

        // Kiểm tra nếu có hình ảnh mới
        if ($request->hasFile('nhdHinhAnh')) {
            // Kiểm tra và xóa hình ảnh cũ nếu tồn tại
            if ($nhdsanpham->nhdHinhAnh && Storage::disk('public')->exists('img/san_pham/' . $nhdsanpham->nhdHinhAnh)) {
                // Xóa file cũ nếu tồn tại
                Storage::disk('public')->delete('img/san_pham/' . $nhdsanpham->nhdHinhAnh);
            }
            // Lưu hình ảnh mới
            $imagePath = $request->file('nhdHinhAnh')->store('img/san_pham', 'public');
            $nhdsanpham->nhdHinhAnh = $imagePath;
        }

        // Lưu thông tin sản phẩm đã chỉnh sửa
        $nhdsanpham->save();

        // Redirect về trang danh sách sản phẩm
        return redirect()->route('nhdadims.nhdsanpham')->with('success', 'Sản phẩm đã được cập nhật thành công.');
    }

    public function update(Request $request, $id)
    {
        $nhdsanpham = nhdsanpham::findOrFail($id);

        // Cập nhật dữ liệu sản phẩm
        $nhdsanpham->nhdTenSanPham = $request->input('TenSanPham');
        // Cập nhật các trường khác
        $nhdsanpham->save();

        // Chuyển hướng về danh sách sản phẩm
        return redirect()->route('nhdsanpham.list')->with('success', 'Cập nhật sản phẩm thành công!');
    }

    

}