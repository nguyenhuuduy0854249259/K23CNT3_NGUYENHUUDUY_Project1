@extends('_layouts.admins._master')
@section('title', 'Xem Thông Tin Loại Sản Phẩm')
    
@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h1>Chi Tiết Sản Phẩm</h1>
                    </div>
                    <div class="card-body">

                        <p class="card-text">
                            <b>Mã sản phẩm:</b>
                            {{$nhdsanpham->nhdMaSanPham}}
                        </p>

                        <p class="card-text">
                            <b>Tên sản phẩm:</b>
                            {{$nhdsanpham->nhdTenSanPham}}
                        </p>

                        <p class="card-text">
                            <b>Hình Ảnh:</b><br>
                            @if (file_exists(public_path('storage/' . $nhdsanpham->nhdHinhAnh)))
                                <img src="{{ asset('storage/' . $nhdsanpham->nhdHinhAnh) }}" alt="Sản phẩm {{ $nhdsanpham->nhdTenSanPham }}" width="200" class="img-fluid">
                            @else
                                <span class="text-danger">Hình ảnh không tồn tại.</span>
                            @endif
                        </p>
                        
                        <p class="card-text">
                            <b>Số lượng :</b>
                            {{$nhdsanpham->nhdSoLuong}}
                        </p>

                        <p class="card-text">
                            <b>Đơn Giá:</b> {{ number_format($nhdsanpham->nhdDonGia, 0, ',', '.') }} VND
                        </p>

                        <p class="card-text">
                            <b>Mã Loại:</b>
                            {{$nhdsanpham->nhdMaLoai}}
                        </p>

                        <p class="card-text">
                            <b>Trạng Thái:</b>
                            {{$nhdsanpham->nhdTrangThai}}
                        </p>

                    </div>
                    <div class="card-footer">
                        <a href="{{route('nhdadims.nhdsanpham')}}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
