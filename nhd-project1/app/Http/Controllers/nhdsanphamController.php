<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nhdsanpham; 
use App\Models\nhdloaisanpham; 
use Illuminate\Support\Facades\Storage; 

class nhdsanphamController extends Controller
{
    // Danh sách sản phẩm
    public function nhdList()
    {
        $nhdsanphams = nhdsanpham::where('nhdTrangThai', 0)->get();
        return view('nhdadmins.nhdsanpham.nhd-list', ['nhdsanphams' => $nhdsanphams]);
    }

    // Chi tiết sản phẩm
    public function nhdDetail($id)
    {
        $nhdsanpham = nhdsanpham::find($id);

        if (!$nhdsanpham) {
            return redirect()->route('nhdadims.nhdsanpham')->with('error', 'Sản phẩm không tồn tại!');
        }

        return view('nhdadmins.nhdsanpham.nhd-detail', ['nhdsanpham' => $nhdsanpham]);
    }

    // Tạo mới sản phẩm - Form
    public function nhdCreate()
    {
        $nhdloaisanpham = nhdloaisanpham::all();
        return view('nhdadmins.nhdsanpham.nhd-create', ['nhdloaisanpham' => $nhdloaisanpham]);
    }

    // Tạo mới sản phẩm - Xử lý form
    public function nhdCreateSubmit(Request $request)
{
    try {
        // Validate input
        $validatedData = $request->validate([
            'nhdMaSanPham' => 'required|unique:nhd_san_pham,nhdMaSanPham',
            'nhdTenSanPham' => 'required|string|max:255',
            'nhdHinhAnh' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:10240',
            'nhdSoLuong' => 'required|numeric|min:1',
            'nhdDonGia' => 'required|numeric',
            'nhdMaLoai' => 'nullable|exists:nhd_loai_san_pham,id',
            'nhdTrangThai' => 'required|in:0,1',
        ]);

        // Khởi tạo đối tượng nhd_SAN_PHAM và lưu thông tin vào cơ sở dữ liệu
        $nhdsanpham = new nhdsanpham;
        $nhdsanpham->nhdMaSanPham = $request->nhdMaSanPham;
        $nhdsanpham->nhdTenSanPham = $request->nhdTenSanPham;

        // Kiểm tra nếu có tệp hình ảnh
        if ($request->hasFile('nhdHinhAnh')) {
            $file = $request->file('nhdHinhAnh');
            if ($file->isValid()) {
                $fileName = $request->nhdMaSanPham . '.' . $file->extension();

                // Lưu tệp vào thư mục storage
                $path = $file->storeAs('public/img/san_pham', $fileName);

                // Kiểm tra nếu việc lưu tệp không thành công
                if (!$path) {
                    dd('Không thể lưu tệp vào thư mục storage.');
                }

                // Lưu đường dẫn hình ảnh vào cơ sở dữ liệu
                $nhdsanpham->nhdHinhAnh = 'img/san_pham/' . $fileName;
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
        return redirect()->route('nhdadims.nhdsanpham')->with('success', 'Thêm mới sản phẩm thành công!');
    } catch (\Exception $e) {
        // Hiển thị thông báo lỗi
        dd($e->getMessage());
    }
}

    // Xóa sản phẩm
    public function nhdDelete($id)
    {
        $nhdsanpham = nhdsanpham::find($id);

        if (!$nhdsanpham) {
            return back()->with('error', 'Sản phẩm không tồn tại!');
        }

        // Xóa ảnh nếu tồn tại
        if ($nhdsanpham->nhdHinhAnh && Storage::disk('public')->exists($nhdsanpham->nhdHinhAnh)) {
            Storage::disk('public')->delete($nhdsanpham->nhdHinhAnh);
        }

        $nhdsanpham->delete();

        return back()->with('success', 'Xóa sản phẩm thành công!');
    }

    // Chỉnh sửa sản phẩm - Form
    public function nhdEdit($id)
    {
        $nhdsanpham = nhdsanpham::findOrFail($id);
        $nhdloaisanpham = nhdloaisanpham::all();

        return view('nhdadmins.nhdsanpham.nhd-edit', [
            'nhdsanpham' => $nhdsanpham,
            'nhdloaisanpham' => $nhdloaisanpham,
        ]);
    }

    // Chỉnh sửa sản phẩm - Xử lý form
    public function nhdEditSubmit(Request $request, $id)
{
    $validatedData = $request->validate([
        'nhdMaSanPham' => 'required|unique:nhd_san_pham,nhdMaSanPham,' . $id,
        'nhdTenSanPham' => 'required|string|max:255',
        'nhdHinhAnh' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:10240',
        'nhdSoLuong' => 'required|numeric|min:1',
        'nhdDonGia' => 'required|numeric',
        'nhdMaLoai' => 'required|exists:nhd_loai_san_pham,id',
        'nhdTrangThai' => 'required|in:0,1',
    ]);

    $nhdsanpham = nhdsanpham::findOrFail($id);

    $nhdsanpham->nhdMaSanPham = $request->nhdMaSanPham;
    $nhdsanpham->nhdTenSanPham = $request->nhdTenSanPham;
    $nhdsanpham->nhdSoLuong = $request->nhdSoLuong;
    $nhdsanpham->nhdDonGia = $request->nhdDonGia;
    $nhdsanpham->nhdMaLoai = $request->nhdMaLoai;
    $nhdsanpham->nhdTrangThai = $request->nhdTrangThai;

    // Cập nhật ảnh
    if ($request->hasFile('nhdHinhAnh')) {
        if ($nhdsanpham->nhdHinhAnh && Storage::disk('public')->exists($nhdsanpham->nhdHinhAnh)) {
            Storage::disk('public')->delete($nhdsanpham->nhdHinhAnh);
        }
        $fileName = $request->nhdMaSanPham . '.' . $request->file('nhdHinhAnh')->extension();
        
        // Lưu tệp vào thư mục storage
        $path = $request->file('nhdHinhAnh')->storeAs('public/img/san_pham', $fileName);

        // Kiểm tra nếu việc lưu tệp không thành công
        if (!$path) {
            dd('Không thể lưu tệp vào thư mục storage.');
        }

        $nhdsanpham->nhdHinhAnh = 'img/san_pham/' . $fileName;
    }

    $nhdsanpham->save();

    return redirect()->route('nhdadims.nhdsanpham')->with('success', 'Cập nhật sản phẩm thành công!');
}

}
