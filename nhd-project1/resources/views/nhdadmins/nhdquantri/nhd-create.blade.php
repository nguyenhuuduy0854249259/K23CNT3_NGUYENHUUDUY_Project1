@extends('_layouts.admins._master')
@section('title', 'Thêm Quản Trị Viên')

@section('content-body')
    <div class="container">
        <form action="{{ route('nhdadmin.nhdquantri.nhdCreateSubmit') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nhdTaiKhoan">Tài Khoản</label>
                <input type="text" class="form-control" id="nhdTaiKhoan" name="nhdTaiKhoan" required>
                @error('nhdTaiKhoan') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="nhdMatKhau">Mật Khẩu</label>
                <input type="password" class="form-control" id="nhdMatKhau" name="nhdMatKhau" required>
                @error('nhdMatKhau') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="nhdTrangThai">Trạng Thái</label>
                <select name="nhdTrangThai" id="nhdTrangThai" class="form-control" required>
                    <option value="0">Cho Phép Đăng Nhập</option>
                    <option value="1">Khóa</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success">Thêm Quản Trị Viên</button>
        </form>
    </div>
@endsection