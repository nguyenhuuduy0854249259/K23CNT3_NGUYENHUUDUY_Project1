@extends('_layouts.admins._master')
@section('title','Create Loại Sản Phẩm')
    
@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <form action="{{ route('nhdadmins.nhdloaisanpham.nhdCreateSubmit') }}" method="POST">

                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h1>Thêm Mới loại sản phẩm</h1>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="nhdMaLoai" class="form-label">Mã Loại</label>
                                <input type="text" class="form-control" id="nhdMaLoai" name="nhdMaLoai" value="{{ old('nhdMaLoai') }}" >
                                @error('nhdMaLoai')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nhdTenLoai" class="form-label">Tên Loại</label>
                                <input type="text" class="form-control" id="nhdTenLoai" name="nhdTenLoai" value="{{ old('nhdTenLoai') }}" >
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
                            <a href="{{route('nhdadims.nhdloaisanpham')}}" class="btn btn-primary"> Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection