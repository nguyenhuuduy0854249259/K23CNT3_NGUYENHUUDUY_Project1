@extends('_layouts.admins._master')
@section('title','Create chi tiết Hóa Đơn')
    
@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <form action="{{ route('nhdadmin.nhdcthoadon.nhdCreateSunmit') }}" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h1>Thêm Mới chi tiết Hóa Đơn</h1>
                        </div>

                        <div class="mb-3">
                            <label for="nhdHoaDonID" class="form-label">Mã Hóa Đơn</label>
                            <select name="nhdHoaDonID" id="nhdHoaDonID" class="form-control">
                                @foreach ($nhdhoadon as $item)
                                    <option value="{{ $item->id }}">{{ $item->nhdMaHoaDon }}</option>
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
                                    <option value="{{ $item->id }}" data-price="{{ $item->nhdDonGia }}">{{ $item->nhdMaSanPham }}</option>
                                @endforeach
                            </select>
                            @error('nhdSanPhamID')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="nhdSoLuongMua" class="form-label">Số Lượng Mua</label>
                            <input type="number" class="form-control" id="nhdSoLuongMua" name="nhdSoLuongMua" value="{{ old('nhdSoLuongMua') }}" min="1" oninput="calculateThanhTien()">
                            @error('nhdSoLuongMua')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="nhdDonGiaMua" class="form-label">Đơn Giá Mua</label>
                            <input type="number" class="form-control" id="nhdDonGiaMua" name="nhdDonGiaMua" value="{{ old('nhdDonGiaMua') }}" oninput="calculateThanhTien()">
                            @error('nhdDonGiaMua')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="nhdThanhTien" class="form-label">Thành Tiền</label>
                            <input type="number" class="form-control" id="nhdThanhTien" name="nhdThanhTien" value="{{ old('nhdThanhTien') }}" readonly>
                            @error('nhdThanhTien')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="nhdTrangThai" class="form-label">Trạng Thái</label>
                            <div class="col-sm-10">
                                <input type="radio" id="nhdTrangThai0" name="nhdTrangThai" value="0" checked />
                                <label for="nhdTrangThai0">Hoàn Thành</label>
                                &nbsp;
                                <input type="radio" id="nhdTrangThai1" name="nhdTrangThai" value="1" />
                                <label for="nhdTrangThai1">Trả Lại</label>
                                &nbsp;
                                <input type="radio" id="nhdTrangThai2" name="nhdTrangThai" value="2" />
                                <label for="nhdTrangThai2">Xóa</label>
                            </div>
                            @error('nhdTrangThai')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="card-footer">
                            <button class="btn btn-success">Create</button>
                            <a href="{{ route('nhdadmins.nhdcthoadon') }}" class="btn btn-primary">Back</a>
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
            var ThanhTien = quantity * unitPrice;
            document.getElementById('nhdThanhTien').value = ThanhTien.toFixed(2);  // Làm tròn đến 2 chữ số thập phân
        }

        // Sự kiện khi chọn sản phẩm, tự động cập nhật Đơn Giá Mua
        document.getElementById('nhdSanPhamID').addEventListener('change', function() {
            var selectedOption = this.options[this.selectedIndex];
            var price = selectedOption.getAttribute('data-price');
            document.getElementById('nhdDonGiaMua').value = price;
            calculateThanhTien();
        });
    </script>
@endsection