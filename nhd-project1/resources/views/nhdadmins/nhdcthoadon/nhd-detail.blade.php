@extends('_layouts.admins._master')
@section('title','Xem THông Tin chi tiết hóa đơn')
    
@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <div class="card">
                        <div class="card-header">
                            <h1>Chi Tiết hóa đơn</h1>
                        </div>
                        <div class="card-body">

                            <p class="card-text">
                                <b>Hóa đơn ID:</b>
                                {{$nhdcthoadon->nhdHoaDonID}}
                            </p>
                            <p class="card-text">
                                <b>SẢn phẩm ID:</b>
                                {{$nhdcthoadon->nhdSanPhamID}}
                            </p>              
                            <p class="card-text">
                                <b>Số lượng mua:</b>
                                {{$nhdcthoadon->nhdSoLuongMua}}
                            </p>
                            <p class="card-text">
                                <b>Đơn Giá Mua:</b>                 
                                {{ number_format($nhdcthoadon->nhdDonGiaMua, 0, ',', '.') }} VND
                            </p>
                            <p class="card-text">
                                <b>Thành Tiền:</b>
                                {{ number_format($nhdcthoadon->nhdThanhTien, 0, ',', '.') }} VND
                            </p>
                            <p class="card-text">
                                <b>Trạng Thái:</b>
                                {{$nhdcthoadon->nhdTrangThai}}
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="{{route('nhdadim.nhdcthoadon')}}" class="btn btn-primary"> Back</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection