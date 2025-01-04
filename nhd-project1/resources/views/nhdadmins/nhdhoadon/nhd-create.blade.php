@extends('_layouts.admins._master')
@section('title','Create Hóa Đơn')
    
@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <form action="{{route('nhdadmin.nhdhoadon.nhdCreateSubmit')}}" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h1>Thêm Mới Hóa Đơn</h1>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="nhdMaHoaDon" class="form-label">Mã Hóa Đơn</label>
                                <input type="text" class="form-control" id="nhdMaHoaDon" name="nhdMaHoaDon" value="{{ old('nhdMaHoaDon') }}" >
                                @error('nhdMaHoaDon')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nhdMaKhachHang" class="form-label">Khách Hàng</label>
                                <select name="nhdMaKhachHang" id="nhdMaKhachHang" class="form-control">
                                    @foreach ($nhdkhachhang as $item)
                                        <option value="{{ $item->id }}">{{ $item->nhdHoTenKhachHang }}</option>
                                    @endforeach
                                </select>
                                @error('nhdMaKhachHang')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nhdNgayHoaDon" class="form-label">Ngày Hóa Đơn</label>
                                <input type="date" class="form-control" id="nhdNgayHoaDon" name="nhdNgayHoaDon" value="{{ old('nhdNgayHoaDon') }}" >
                                @error('nhdNgayHoaDon')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nhdNgayNhan" class="form-label">Ngày Nhận</label>
                                <input type="date" class="form-control" id="nhdNgayNhan" name="nhdNgayNhan" value="{{ old('nhdNgayNhan') }}" >
                                @error('nhdNgayNhan')
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
                                <input type="Email" class="form-control" id="nhdEmail" name="nhdEmail" value="{{ old('nhdEmail') }}" >
                                @error('nhdEmail')
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
                                <label for="nhdTongGiaTri" class="form-label">Tổng Giá Trị</label>
                                <input type="number" class="form-control" id="nhdTongGiaTri" name="nhdTongGiaTri" value="{{ old('nhdTongGiaTri') }}" >
                                @error('nhdTongGiaTri')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nhdTrangThai" class="form-label">Trạng Thái</label>
                                <div class="col-sm-10">
                                    <input type="radio" id="nhdTrangThai0" name="nhdTrangThai" value="0" checked/>
                                    <label for="nhdTrangThai1">Chờ Sử Lý</label>
                                    &nbsp;
                                    <input type="radio" id="nhdTrangThai1" name="nhdTrangThai" value="1"/>
                                    <label for="nhdTrangThai0">Đang Sử Lý</label>
                                    &nbsp;
                                    <input type="radio" id="nhdTrangThai2" name="nhdTrangThai" value="2"/>
                                    <label for="nhdTrangThai0">Đã hoàn Thành</label>
                                </div>
                                @error('nhdTrangThai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success">Create</button>
                            <a href="{{route('nhdadmins.nhdhoadon')}}" class="btn btn-primary"> Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection