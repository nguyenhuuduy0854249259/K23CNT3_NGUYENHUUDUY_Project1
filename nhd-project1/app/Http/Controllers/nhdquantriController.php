<?php

namespace App\Http\Controllers;

use App\Models\nhdquantri; // Thêm dòng này để sử dụng Model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session; // Thêm dòng này để sử dụng session

class nhdquantriController extends Controller
{
    // GET login (authentication)
    public function nhdLogin()
    {
        return view('nhdadmins.nhd-login'); // Trả về view
    }

    // POST login (authentication)
    public function nhdLoginSubmit(Request $request)
    {
        $request->validate([
            'nhdTaiKhoan' => 'required|string',
            'nhdMatKhau' => 'required|string',
        ]);

        $user = nhdquantri::where('nhdTaiKhoan', $request->nhdTaiKhoan)->first();

        if ($user && Hash::check($request->nhdMatKhau, $user->nhdMatKhau)) {
            Session::put('nhdadmins', $user);
            return redirect('/dashboard');
        } else {
            return back()->withErrors(['message' => 'Tài khoản hoặc mật khẩu không chính xác']);
        }
    }

    public function nhdlist()
{
    $nhdquantri = nhdquantri::all(); // Lấy tất cả quản trị viên
    return view('nhdadmins.nhdquantri.nhd-list', ['nhdquantri'=>$nhdquantri]);
}

public function nhdDetail($id)
    {
        $nhdquantri = nhdquantri::where('id', $id)->first();
        return view('nhdadmins.nhdquantri.nhd-detail',['nhdquantri'=>$nhdquantri]);

    }

    //create
    // GET: Hiển thị form thêm mới quản trị viên
public function nhdCreate()
{
    return view('nhdadmins.nhdquantri.nhd-create');
}

// POST: Xử lý form thêm mới quản trị viên
public function nhdCreateSubmit(Request $request)
{
    // Xác thực dữ liệu
    $request->validate([
        'nhdTaiKhoan' => 'required|string|unique:nhd_quan_tri,nhdTaiKhoan',
        'nhdMatKhau' => 'required|string|min:6',
        'nhdTrangThai' => 'required|in:0,1', 
    ]);

    // Tạo bản ghi mới trong cơ sở dữ liệu
    $nhdquantri = new nhdquantri();
    $nhdquantri->nhdTaiKhoan = $request->nhdTaiKhoan;
    $nhdquantri->nhdMatKhau = Hash::make($request->nhdMatKhau); // Mã hóa mật khẩu
    $nhdquantri->nhdTrangThai = $request->nhdTrangThai;
    $nhdquantri->save();

    // Chuyển hướng về trang danh sách với thông báo thành công
    return redirect()->route('nhdadmins.nhdquantri')->with('success', 'Thêm quản trị viên thành công');
}

// edit
// GET: Hiển thị form chỉnh sửa quản trị viên
public function nhdEdit($id)
{
    $nhdquantri = nhdquantri::find($id); // Lấy thông tin quản trị viên cần chỉnh sửa
    if (!$nhdquantri) {
        return redirect()->route('nhdadmins.nhdquantri')->with('error', 'Không tìm thấy quản trị viên!');
    }
    return view('nhdadmins.nhdquantri.nhd-edit', ['nhdquantri'=>$nhdquantri]);
}

// POST: Xử lý form chỉnh sửa quản trị viên
public function nhdEditSubmit(Request $request, $id)
{
    // Xác thực dữ liệu
    $request->validate([
        'nhdTaiKhoan' => 'required|string|unique:nhd_quan_tri,nhdTaiKhoan,' . $id,
        'nhdMatKhau' => 'nullable|string|min:6', // Cho phép mật khẩu trống
        'nhdTrangThai' => 'required|in:0,1',
    ]);

    // Lấy quản trị viên cần sửa
    $nhdquantri = nhdquantri::find($id);
    if (!$nhdquantri) {
        return redirect()->route('nhdadmins.nhdquantri')->with('error', 'Không tìm thấy quản trị viên!');
    }

    // Cập nhật thông tin
    $nhdquantri->nhdTaiKhoan = $request->nhdTaiKhoan;
    if ($request->nhdMatKhau) {
        $nhdquantri->nhdMatKhau = Hash::make($request->nhdMatKhau); // Cập nhật mật khẩu nếu có
    }
    $nhdquantri->nhdTrangThai = $request->nhdTrangThai;
    $nhdquantri->save();

    return redirect()->route('nhdadmins.nhdquantri')->with('success', 'Cập nhật quản trị viên thành công');
}

// delete
public function nhdDelete($id)
{
    $nhdquantri = nhdquantri::find($id); // Tìm quản trị viên cần xóa
    if (!$nhdquantri) {
        return redirect()->route('nhdadmins.nhdquantri')->with('error', 'Không tìm thấy quản trị viên!');
    }
    $nhdquantri->delete(); // Xóa bản ghi

    return redirect()->route('nhdadmins.nhdquantri')->with('success', 'Xóa quản trị viên thành công');
}



}