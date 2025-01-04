@extends('_layouts.admins._master')
@section('title','Xem THông Tin Khách Hàng')
    
@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <div class="card">
                        <div class="card-header">
                            <h1>Chi Tiết Hóa Đơn</h1>
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                <b>Mã Hóa Đơn:</b>
                                {{$nhdhoadon->nhdMaHoaDon}}
                            </p>

                            <p class="card-text">
                                <b>Mã Khách Hàng:</b>
                                {{$nhdhoadon->nhdMaKhachHang}}
                            </p>

                            <p class="card-text">
                                <b>Ngày Hóa Đơn:</b>
                                {{$nhdhoadon->nhdNgayHoaDon}}
                            </p>

                            <p class="card-text">
                                <b>Ngày Nhận:</b>
                                {{$nhdhoadon->nhdNgayNhan}}
                            </p>


                            <p class="card-text">
                                <b>Họ Tên Khách Hàng:</b>
                                {{$nhdhoadon->nhdHoTenKhachHang}}
                            </p>
                            <p class="card-text">
                                <b>Email:</b>
                                {{$nhdhoadon->nhdEmail}}
                            </p>


                            <p class="card-text">
                                <b>Điện Thoại:</b>
                                {{$nhdhoadon->nhdDienThoai}}
                            </p>

                            <p class="card-text">
                                <b>Địa Chỉ:</b>
                                {{$nhdhoadon->nhdDiaChi}}
                            </p>

                            <p class="card-text">
                                <b>Tổng Giá Trị:</b>
                                {{ number_format($nhdhoadon->nhdTongGiaTri, 0, ',', '.') }} VND
                            </p>

                            <p class="card-text">
                                <b>Trạng Thái:</b>
                                {{$nhdhoadon->nhdTrangThai}}
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="{{route('nhdadmins.nhdhoadon')}}" class="btn btn-primary"> Back</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection