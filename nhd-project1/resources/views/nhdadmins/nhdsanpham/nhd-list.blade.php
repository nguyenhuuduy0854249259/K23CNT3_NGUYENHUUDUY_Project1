@extends('_layouts.admins._master')
@section('title','Danh Sách Loại Sản Phẩm')

@section('content-body')
    <div class="container border mt-4">
        <div class="row mb-4">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <h1>Danh Sách Sản Phẩm</h1>
                <!-- Nút Thêm Mới -->
                <a href="{{ url('/nhd-admins/nhdsanpham/create') }}" class="btn btn-success btn-lg">
                    <i class="fa-solid fa-plus-circle"></i> Thêm Mới
                </a>
            </div>
        </div>
        <div class="row">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Mã san phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Số lượng</th>
                        <th>Đơn giá</th>
                        <th>Mã loại</th>
                        <th>Trạng thái</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $stt = 0;
                    @endphp
                    @forelse ($nhdsanphams as $item)
                    @php
                        $stt++;
                    @endphp
                    <tr>
                        <td>{{ $stt }}</td> <!-- Incremental Number -->
                        <td>{{ $item->nhdMaSanPham }}</td>
                        <td>{{ $item->nhdTenSanPham }}</td>
                        <td style="display: flex; justify-content: center; align-items: center; height: 100px;">
                            <img src="{{ asset($item->nhdHinhAnh) }}" alt="Sản phẩm {{ $item->nhdTenSanPham }}" width="100" height="100">
                        </td>
                        <td>{{ $item->nhdSoLuong }}</td>
                        <td>{{ number_format($item->nhdDonGia, 0, ',', '.') }} VND</td>
                        <td>{{ $item->nhdMaLoai }}</td>
                        <td>
                            @if($item->nhdTrangThai == 0)
                                <span class="badge bg-success">Hiển Thị</span>
                            @else
                                <span class="badge bg-danger">Khóa</span>
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
                                   onclick="return confirm('Bạn muốn xóa Mã Loại này không? ID: {{ $item->id }}');" title="Xóa">
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