@extends('_layouts.admins._master')
@section('title','Xem THông Tin Khách Hàng')
    
@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <div class="card">
                        <div class="card-header">
                            <h1>Chi Tiết Khách Hàng</h1>
                        </div>
                        <div class="card-body">

                            <p class="card-text">
                                <b>Mã Khách Hàng:</b>
                                {{$nhdkhachhang->nhdMaKhachHang}}
                            </p>
                            <p class="card-text">
                                <b>Họ Tên Khách Hàng:</b>
                                {{$nhdkhachhang->nhdHoTenKhachHang}}
                            </p>
                            <p class="card-text">
                                <b>Email:</b>
                                {{$nhdkhachhang->nhdEmail}}
                            </p>

                            <p class="card-text">
                                <b>Mật Khẩu:</b>
                                {{$nhdkhachhang->nhdMatKhau}}
                            </p>

                            <p class="card-text">
                                <b>Điện Thoại:</b>
                                {{$nhdkhachhang->nhdDienThoai}}
                            </p>

                            <p class="card-text">
                                <b>Địa Chỉ:</b>
                                {{$nhdkhachhang->nhdDiaChi}}
                            </p>

                            <p class="card-text">
                                <b>Ngày Đăng Ký:</b>
                                {{$nhdkhachhang->nhdNgayDangKy}}
                            </p>

                            <p class="card-text">
                                <b>Trạng Thái:</b>
                                {{$nhdkhachhang->nhdTrangThai}}
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="{{route('nhdadmins.nhdkhachhang')}}" class="btn btn-primary"> Back</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection