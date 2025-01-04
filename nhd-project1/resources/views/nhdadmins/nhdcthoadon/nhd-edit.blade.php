@extends('_layouts.admins._master')
@section('title','Chỉnh Sửa Chi Tiết Hóa Đơn')

@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <form action="{{ route('nhdadmin.nhdcthoadon.nhdEditSubmit', $nhdcthoadon->id) }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="card">
                        <div class="card-header">
                            <h1>Chỉnh Sửa Chi Tiết Hóa Đơn</h1>
                        </div>

                        <div class="mb-3">
                            <label for="nhdHoaDonID" class="form-label">Mã Hóa Đơn</label>
                            <select name="nhdHoaDonID" id="nhdHoaDonID" class="form-control">
                                @foreach ($nhdhoadon as $item)
                                    <option value="{{ $item->id }}" {{ $nhdcthoadon->nhdHoaDonID == $item->id ? 'selected' : '' }}>{{ $item->nhdMaHoaDon }}</option>
                                @endforeach
                            </select>
                            @error('nhdHoaDonID')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="nhdSanPhamID" class="form-label">Mã Sản Phẩm</label>
                            <select name="nhdSanPhamID" id="nhdSanPhamID" class="form-control">
                                @foreach ($nhdsanpham as $item)
                                    <option value="{{ $item->id }}" {{ $nhdcthoadon->nhdSanPhamID == $item->id ? 'selected' : '' }}>{{ $item->nhdMaSanPham }}</option>
                                @endforeach
                            </select>
                            @error('nhdSanPhamID')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="nhdSoLuongMua" class="form-label">Số Lượng Mua</label>
                            <input type="number" class="form-control" id="nhdSoLuongMua" name="nhdSoLuongMua" value="{{ old('nhdSoLuongMua', $nhdcthoadon->nhdSoLuongMua) }}" min="1" oninput="calculateThanhTien()">
                            @error('nhdSoLuongMua')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="nhdDonGiaMua" class="form-label">Đơn Giá Mua</label>
                            <input type="number" class="form-control" id="nhdDonGiaMua" name="nhdDonGiaMua" value="{{ old('nhdDonGiaMua', $nhdcthoadon->nhdDonGiaMua) }}" oninput="calculateThanhTien()">
                            @error('nhdDonGiaMua')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="nhdThanhTien" class="form-label">Thành Tiền</label>
                            <input type="number" class="form-control" id="nhdThanhTien" name="nhdThanhTien" value="{{ old('nhdThanhTien', $nhdcthoadon->nhdThanhTien) }}" readonly>
                            @error('nhdThanhTien')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="nhdTrangThai" class="form-label">Trạng Thái</label>
                            <div class="col-sm-10">
                                <input type="radio" id="nhdTrangThai0" name="nhdTrangThai" value="0" {{ $nhdcthoadon->nhdTrangThai == 0 ? 'checked' : '' }} />
                                <label for="nhdTrangThai0">Hoàn Thành</label>
                                &nbsp;
                                <input type="radio" id="nhdTrangThai1" name="nhdTrangThai" value="1" {{ $nhdcthoadon->nhdTrangThai == 1 ? 'checked' : '' }} />
                                <label for="nhdTrangThai1">Trả Lại</label>
                                &nbsp;
                                <input type="radio" id="nhdTrangThai2" name="nhdTrangThai" value="2" {{ $nhdcthoadon->nhdTrangThai == 2 ? 'checked' : '' }} />
                                <label for="nhdTrangThai2">Xóa</label>
                            </div>
                            @error('nhdTrangThai')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="card-footer">
                            <button class="btn btn-success">Cập Nhật</button>
                            <a href="{{ route('nhdadmins.nhdcthoadon') }}" class="btn btn-primary">Quay lại</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Hàm tính Thành Tiền
        function calculateThanhTien() {
            var quantity = parseFloat(document.getElementById('nhdSoLuongMua').value);
            var unitPrice = parseFloat(document.getElementById('nhdDonGiaMua').value);
            var thanhTien = quantity * unitPrice;
            document.getElementById('nhdThanhTien').value = thanhTien.toFixed(2);  // Làm tròn đến 2 chữ số thập phân
        }
    </script>
@endsection