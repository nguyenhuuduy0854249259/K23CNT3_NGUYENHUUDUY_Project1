@extends('_layouts.admins._master')
@section('title','Create Khách Hàng')
    
@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <form action="{{route('nhdadmin.nhdkhachhang.nhdCreateSubmit')}}" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h1>Thêm Mới Khách Hàng</h1>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="nhdMaKhachHang" class="form-label">Mã Khách Hàng</label>
                                <input type="text" class="form-control" id="nhdMaKhachHang" name="nhdMaKhachHang" value="{{ old('nhdMaKhachHang') }}" >
                                @error('nhdMaKhachHang')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nhdHoTenKhachHang" class="form-label">Họ Tên Khách Hàng</label>
                                <input type="text" class="form-control" id="nhdHoTenKhachHang" name="nhdHoTenKhachHang" value="{{ old('nhdHoTenKhachHang') }}" >
                                @error('nhdHoTenKhachHang')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nhdEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="nhdEmail" name="nhdEmail" value="{{ old('nhdEmail') }}" >
                                @error('nhdEmail')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nhdMatKhau" class="form-label">Mật Khẩu</label>
                                <input type="password" class="form-control" id="nhdMatKhau" name="nhdMatKhau" value="{{ old('nhdMatKhau') }}" >
                                @error('nhdMatKhau')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nhdDienThoai" class="form-label">Điện Thoại</label>
                                <input type="tel" class="form-control" id="nhdDienThoai" name="nhdDienThoai" value="{{ old('nhdDienThoai') }}" >
                                @error('nhdDienThoai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nhdDiaChi" class="form-label">Địa Chỉ</label>
                                <input type="text" class="form-control" id="nhdDiaChi" name="nhdDiaChi" value="{{ old('nhdDiaChi') }}" >
                                @error('nhdDiaChi')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nhdNgayDangKy" class="form-label">Ngày Đăng Ký</label>
                                <input type="date" class="form-control" id="nhdNgayDangKy" name="nhdNgayDangKy" value="{{ old('nhdNgayDangKy') }}" >
                                @error('nhdNgayDangKy')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nhdTrangThai" class="form-label">Trạng Thái</label>
                                <div class="col-sm-10">
                                    <input type="radio" id="nhdTrangThai0" name="nhdTrangThai" value="0" checked/>
                                    <label for="nhdTrangThai1"> Hoạt Động</label>
                                    &nbsp;
                                    <input type="radio" id="nhdTrangThai1" name="nhdTrangThai" value="1"/>
                                    <label for="nhdTrangThai0">Tạm Khóa</label>
                                    &nbsp;
                                    <input type="radio" id="nhdTrangThai2" name="nhdTrangThai" value="2"/>
                                    <label for="nhdTrangThai0">Khóa</label>
                                </div>
                                @error('nhdTrangThai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success">Create</button>
                            <a href="{{route('nhdadmins.nhdkhachhang')}}" class="btn btn-primary"> Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection