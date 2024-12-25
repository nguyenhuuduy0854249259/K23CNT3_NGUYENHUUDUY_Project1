@extends('_layouts.admins._master')
@section('title','Sửa Loại Sản Phẩm')

@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <!-- Update the form action route to pass the nhdMaLoai as a parameter -->
                <form action="{{ route('nhdadmin.nhdloaisanpham.nhdEditSubmit') }}" method="POST">
                    @csrf
                    <!-- Hidden input for the ID -->
                    <input type="hidden" name="id" value="{{ $nhdloaisanpham->id }}">

                    <div class="card">
                        <div class="card-header">
                            <h1>Sửa loại sản phẩm</h1>
                        </div>
                        <div class="card-body">
                            <!-- Mã Loại (disabled) -->
                            <div class="mb-3">
                                <label for="nhdMaLoai" class="form-label">Mã Loại</label>
                                <input type="text" class="form-control" id="nhdMaLoai" name="nhdMaLoai" value="{{ $nhdloaisanpham->nhdMaLoai }}" >
                                @error('nhdMaLoai')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>

                            <!-- Tên Loại -->
                            <div class="mb-3">
                                <label for="nhdTenLoai" class="form-label">Tên Loại</label>
                                <input type="text" class="form-control" id="nhdTenLoai" name="nhdTenLoai" value="{{ old('nhdTenLoai', $nhdloaisanpham->nhdTenLoai) }}" >
                                @error('nhdTenLoai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Trạng Thái -->
                            <div class="mb-3">
                                <label for="nhdTrangThai" class="form-label">Trạng Thái</label>
                                <div class="col-sm-10">
                                    <input type="radio" id="nhdTrangThai1" name="nhdTrangThai" value="1" {{ old('nhdTrangThai', $nhdloaisanpham->nhdTrangThai) == 1 ? 'checked' : '' }} />
                                    <label for="nhdTrangThai1">Khóa</label>
                                    &nbsp;
                                    <input type="radio" id="nhdTrangThai0" name="nhdTrangThai" value="0" {{ old('nhdTrangThai', $nhdloaisanpham->nhdTrangThai) == 0 ? 'checked' : '' }} />
                                    <label for="nhdTrangThai0">Hiển Thị</label>
                                </div>
                                @error('nhdTrangThai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="card-footer">
                            <!-- Change button label to "Cập nhật" (Update) -->
                            <button class="btn btn-success" type="submit">Cập nhật</button>
                            <a href="{{ route('nhdadims.nhdloaisanpham') }}" class="btn btn-primary">Trở lại</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection