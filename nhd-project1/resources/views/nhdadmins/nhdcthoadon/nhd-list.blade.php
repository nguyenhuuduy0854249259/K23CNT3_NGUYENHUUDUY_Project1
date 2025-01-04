@extends('_layouts.admins._master')
@section('title','Danh Sách chi tiết hóa đơn')

@section('content-body')
    <div class="container border mt-4">
        <div class="row mb-4">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <h1>Danh Sách Sản Phẩm</h1>
                <!-- Nút Thêm Mới -->
                <a href="{{ url('/nhd-admins/nhdcthoadon/nhd-create') }}" class="btn btn-success btn-lg">
                    <i class="fa-solid fa-plus-circle"></i> Thêm Mới
                </a>
            </div>
        </div>
        <div class="row">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Hóa đơn ID</th>
                        <th>Sản phẩm ID</th>
                        <th>Số lượng mua</th>
                        <th>Đơn giá mua</th>
                        <th>Thành tiền</th>
                        <th>Trạng thái</th>
                        <th>Chắc năng</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $stt = 0;
                    @endphp
                    @forelse ($nhdcthoadon as $item)
                    @php
                        $stt++;
                    @endphp
                    <tr>
                        <td>{{ $stt }}</td>
                            <td>{{ $item->nhdHoaDonID }}</td>
                            <td>{{ $item->nhdSanPhamID }}</td>
                            <td>{{ $item->nhdSoLuongMua }}</td>
                            <td>{{ $item->nhdDonGiaMua }}</td>
                            <td>{{ $item->nhdThanhTien }}</td>
                        <td>
                            @if($item->nhdTrangThai == 0)
                            <span class="badge bg-primary">Hoàn Thành</span>
                        @elseif($item->nhdTrangThai == 1)
                            <span class="badge bg-success">Trả Lại</span>
                        @else
                            <span class="badge bg-danger">Xóa</span>
                        @endif
                        </td>
                        <td class="text-center">
                            <!-- Function Buttons with Icons -->
                            <div class="btn-group" role="group">
                                <!-- View Details -->
                                <a href="{{ url('/nhd-admins/nhdsanpham/nhd-detail/' . $item->id) }}" class="btn btn-success btn-sm" title="Xem">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                <!-- Edit -->
                                <a href="{{ url('/nhd-admins/nhdsanpham/nhd-edit/' . $item->id) }}" class="btn btn-primary btn-sm" title="Chỉnh sửa">
                                    <i class="fa-solid fa-pen"></i>
                                </a>
                                <!-- Delete -->
                                <a href="{{ url('/nhd-admins/sanpham/nhd-delete/' . $item->id) }}" class="btn btn-danger btn-sm" 
                                   onclick="return confirm('Bạn muốn xóa Mã khách hàng này không? ID: {{ $item->id }}');" title="Xóa">
                                    <i class="fa-regular fa-trash-can"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="text-center text-muted">
                            Chưa có thông tin loại sản phẩm
                        </td>
                    </tr>
                @endforelse
                
                </tbody>
            </table>
        </div>
    </div>
@endsection