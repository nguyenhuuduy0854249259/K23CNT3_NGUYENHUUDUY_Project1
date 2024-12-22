<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\nhdSinhVien;
use App\Models\nhdkhoa;


class nhdSinhVienController extends Controller
{
    //CRUD
    public function nhdList()
    {
        // Lấy toàn bộ dữ liệu trong bảng sinh viên
        $nhdSinhVien = nhdSinhVien::all();
        return view('nhdSinhVien.nhd-list', ['nhdSinhVien'=>$nhdSinhVien]);
    }

    //create (inser)
    public function nhdcreate()
    {
       // Lấy danh sách tất cả các khoa từ bảng nhdSinhVien
       $khoa = nhdSinhVien::all(); 
       // Trả về view và truyền dữ liệu danh sách khoa
       return view('nhdSinhVien.nhd-create', ['khoa' => $khoa]);
    }

    //createSubmif
    public function nhdCreateSubmit(Request $request)
    {
        // Kiểm tra xem mã khoa có được chọn không
        if (empty($request->NHDMAKH)) {
            return back()->with('error', 'Vui lòng chọn mã khoa!');
        }
        // Kiểm tra mã khoa có tồn tại trong bảng nhdSinhVien không
        $khoa = nhdkhoa::where('NHDMAKH', $request->NHDMAKH)->first();
        if (!$khoa) {
            return back()->with('error', 'Mã khoa không tồn tại!');
        }
        // Tiến hành lưu sinh viên mới
        $nhdSinhVien = new nhdSinhVien;
        $nhdSinhVien->NHDMASV = $request->NHDMASV;
        $nhdSinhVien->NHDHOSV = $request->NHDHOSV;
        $nhdSinhVien->NHDTENSV = $request->NHDTENSV;
        // Kiểm tra và lưu giới tính, chuyển đổi sang kiểu BIT (1 hoặc 0)
        $nhdSinhVien->NHDPHAI = $request->NHDPHAI == '1' ? 1 : 0;
        // Lưu ngày sinh và nơi sinh
        $nhdSinhVien->NHDNGAYSINH = $request->NHDNGAYSINH;
        $nhdSinhVien->NHDNOISINH = $request->NHDNOISINH;
        $nhdSinhVien->NHDMAKH = $request->NHDMAKH;
        // Lưu học bổng và điểm trung bình, kiểm tra kiểu dữ liệu float
        $nhdSinhVien->NHDHOCBONG = (float)$request->NHDHOCBONG;
        $nhdSinhVien->NHDDIEMTRUNGBINH = (float)$request->NHDDIEMTRUNGBINH;
        // Lưu sinh viên vào cơ sở dữ liệu
        $nhdSinhVien->save();
        // Thông báo thành công khi thêm sinh viên mới
        return redirect('/nhd-sinhvien')->with('sinhvien_created', 'Đã thêm mới một sinh viên thành công!');
    }
    public function nhddelete($masv)
    {
    nhdSinhVien::where('NHDMASINHVIEN',$masv)->delete();
    return back()->with('sinhVien_deleted','Đã xóa sinh viên thành công!');
    }
    public function nhdEditSubmit(Request $request, $masv)
    {
        // Kiểm tra dữ liệu nhập vào từ người dùng (validate)
        $request->validate([
            'hosinhvien' => 'required|string|max:255',
            'tensinhvien' => 'required|string|max:255',
            'gioitinh' => 'required|in:0,1', // Giới tính phải là 0 hoặc 1
            'ngaysinh' => 'required|date', // Ngày sinh phải có định dạng đúng
            'noisinh' => 'required|string|max:255',
            'NDDMAKHOA' => 'required|exists:nhdkhoa,NHDMAKHOA', // Kiểm tra mã khoa có tồn tại trong bảng nhdkhoa
            'hocbong' => 'nullable|numeric', // Kiểm tra kiểu dữ liệu học bổng là số
            'diemtrungbinh' => 'nullable|numeric', // Kiểm tra kiểu dữ liệu điểm trung bình là số
        ]);

        // Lấy thông tin sinh viên từ cơ sở dữ liệu
        $nhdSinhVien = nhdSinhvien::where('NHDMASINHVIEN', $masv)->first();

        // Kiểm tra nếu sinh viên không tồn tại
        if (!$nhdSinhVien) {
            return redirect('/sinhvien')->with('error', 'Sinh viên không tồn tại.');
        }
        // Cập nhật thông tin sinh viên
        $nhdSinhVien->nhDHOSV = $request->hosinhvien; // Cập nhật họ sinh viên
        $nhdSinhVien->nhDTENSV = $request->tensinhvien; // Cập nhật tên sinh viên
        // Xử lý giới tính: chuyển đổi giá trị từ 0 hoặc 1 sang kiểu BIT (1 hoặc 0)
        $nhdSinhVien->NHDPHAI = $request->gioitinh == '1' ? 1 : 0;
        // Cập nhật ngày sinh và nơi sinh
        $nhdSinhVien->NHDNGAYSINH = $request->ngaysinh;
        $nhdSinhVien->NHDNOISINH = $request->noisinh;
        // Cập nhật mã khoa
        $nhdSinhVien->NHDMAKHOA = $request->NHDMAKHOA;
        // Cập nhật học bổng và điểm trung bình
        $nhdSinhVien->NHDHOCBONG = (float)$request->hocbong; // Lưu học bổng dưới dạng số thực
        $nhdSinhVien->NHDDIEMTRUNGBINH = (float)$request->diemtrungbinh; // Lưu điểm trung bình dưới dạng số thực
        // Lưu lại thông tin sinh viên vào cơ sở dữ liệu
        $nhdSinhVien->save();
        // Chuyển hướng và thông báo thành công
        return redirect('/sinhvien')->with('success', 'Thông tin sinh viên đã được cập nhật.');
    }

}
