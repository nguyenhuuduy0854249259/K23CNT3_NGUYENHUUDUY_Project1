@extends('_layouts.admins._master')
@section('title','Create Sản Phẩm')
    
@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <form action="{{route('nhdadmins.nhdsanpham.nhdCreateSubmit')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h1>Thêm Mới sản phẩm</h1>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="nhdMaSanPham" class="form-label">Mã sản phẩm</label>
                                <input type="text" class="form-control" id="nhdMaSanPham" name="nhdMaSanPham" value="{{ old('nhdMaSanPham') }}" >
                                @error('nhdMaSanPham')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nhdTenSanPham" class="form-label">Tên sản phẩm</label>
                                <input type="text" class="form-control" id="nhdTenSanPham" name="nhdTenSanPham" value="{{ old('nhdTenSanPham') }}" >
                                @error('nhdTenSanPham')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nhdHinhAnh" class="form-label">Hình Ảnh</label>
                                <input type="file" class="form-control" id="nhdHinhAnh" name="nhdHinhAnh" accept="image/*">
                                @error('nhdHinhAnh')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nhdSoLuong" class="form-label">Số lượng</label>
                                <input type="text" class="form-control" id="nhdSoLuong" name="nhdSoLuong" value="{{ old('nhdSoLuong') }}" >
                                @error('nhdSoLuong')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nhdDonGia" class="form-label">Đơn giá</label>
                                <input type="text" class="form-control" id="nhdDonGia" name="nhdDonGia" value="{{ old('nhdDonGia') }}" >
                                @error('nhdDonGia')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label for="nhdMaLoai" class="form-label">Mã Loại</label>
                                <input type="text" class="form-control" id="nhdMaLoai" name="nhdMALoai" value="{{ old('nhdMaLoai') }}" >
                                @error('nhdTenLoai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nhdTrangThai" class="form-label">Trạng Thái</label>
                                <div class="col-sm-10">
                                    <input type="radio" id="nhdTrangThai1" name="nhdTrangThai" value="0" checked/>
                                    <label for="nhdTrangThai1"> Hiển Thị</label>
                                    &nbsp;
                                    <input type="radio" id="nhdTrangThai0" name="nhdTrangThai" value="1"/>
                                    <label for="nhdTrangThai0">Khóa</label>
                                </div>
                                @error('nhdTrangThai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success">Create</button>
                            <a href="{{route('nhdadims.nhdsanpham')}}" class="btn btn-primary"> Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection