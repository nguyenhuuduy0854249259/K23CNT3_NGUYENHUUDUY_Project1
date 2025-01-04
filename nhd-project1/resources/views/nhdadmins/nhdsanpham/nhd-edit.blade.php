@extends('_layouts.admins._master')

@section('title', 'Chỉnh Sửa Sản Phẩm')

@section('content-body')
<div class="container border mt-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>Chỉnh Sửa Sản Phẩm</h1>
                </div>
                <div class="card-body">
                    <!-- Form chỉnh sửa sản phẩm -->
                    <form action="{{ route('nhdadmins.nhdsanpham.nhdEditSubmit', $nhdsanpham->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')

                        <!-- Mã sản phẩm -->
                        <div class="mb-3">
                            <label for="nhdMaSanPham" class="form-label">Mã sản phẩm</label>
                            <input type="text" name="nhdMaSanPham" class="form-control" value="{{ old('nhdMaSanPham', $nhdsanpham->nhdMaSanPham) }}">
                            @error('nhdMaSanPham')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Tên sản phẩm -->
                        <div class="mb-3">
                            <label for="nhdTenSanPham" class="form-label">Tên sản phẩm</label>
                            <input type="text" name="nhdTenSanPham" class="form-control" value="{{ old('nhdTenSanPham', $nhdsanpham->nhdTenSanPham) }}">
                            @error('nhdTenSanPham')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Hình ảnh sản phẩm -->
                        <div class="mb-3">
                            <label for="nhdHinhAnh" class="form-label">Hình ảnh</label>
                            <input type="file" name="nhdHinhAnh" class="form-control">
                            @if($nhdsanpham->nhdHinhAnh)
                                <img src="{{ asset('storage/' . $nhdsanpham->nhdHinhAnh) }}" alt="Sản phẩm {{ $nhdsanpham->nhdMaSanPham }}" width="200" class="mt-2">
                            @endif
                            @error('nhdHinhAnh')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Số lượng -->
                        <div class="mb-3">
                            <label for="nhdSoLuong" class="form-label">Số lượng</label>
                            <input type="number" name="nhdSoLuong" class="form-control" value="{{ old('nhdSoLuong', $nhdsanpham->nhdSoLuong) }}">
                            @error('nhdSoLuong')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Đơn giá -->
                        <div class="mb-3">
                            <label for="nhdDonGia" class="form-label">Đơn giá</label>
                            <input type="number" name="nhdDonGia" class="form-control" value="{{ old('nhdDonGia', $nhdsanpham->nhdDonGia) }}">
                            @error('nhdDonGia')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Mã Loại -->
                        <div class="mb-3">
                            <label for="nhdMaLoai" class="form-label">Loại Danh Muc</label>
                            <select name="nhdMaLoai" id="nhdMaLoai" class="form-control">
                                @foreach ($nhdloaisanpham as $item)
                                    <option value="{{ $item->id }}" 
                                        {{ old('nhdMaLoai', $nhdsanpham->nhdMaLoai) == $item->id ? 'selected' : '' }}>
                                        {{ $item->nhdTenLoai }}
                                    </option>
                                @endforeach
                            </select>
                            @error('nhdMaLoai')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <!-- Trạng thái -->
                        <div class="mb-3">
                            <label for="nhdTrangThai" class="form-label">Trạng Thái</label>
                            <div class="col-sm-10">
                                <input type="radio" id="nhdTrangThai1" name="nhdTrangThai" value="1" {{ old('nhdTrangThai', $nhdsanpham->nhdTrangThai) == 1 ? 'checked' : '' }} />
                                <label for="nhdTrangThai1">Khóa</label>
                                &nbsp;
                                <input type="radio" id="nhdTrangThai0" name="nhdTrangThai" value="0" {{ old('nhdTrangThai', $nhdsanpham->nhdTrangThai) == 0 ? 'checked' : '' }} />
                                <label for="nhdTrangThai0">Hiển Thị</label>
                            </div>
                            @error('nhdTrangThai')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- Nút lưu -->
                        <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                    </form>
                </div>
                <div class="card-footer">
                    <!-- Nút quay lại danh sách sản phẩm -->
                    <a href="{{ route('nhdadims.nhdsanpham') }}" class="btn btn-secondary">Quay lại danh sách</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection