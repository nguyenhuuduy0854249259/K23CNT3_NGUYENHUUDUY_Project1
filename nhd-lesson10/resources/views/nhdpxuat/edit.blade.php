<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sửa Thông Tin Vật Tư</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <div class="card">
            <div class="card-header">
                <h3>Sửa thông tin Vật Tư</h3>
            </div>
            <div class="card-body">
                <!-- Form Edit Vật Tư -->
                <form action="{{ route('nhdpxuat.nhdeditsubmit', $nhdpxuat->nhdSoPx) }}" method="POST">
                    @csrf

                    <!-- Mã Vật Tư (disabled) -->
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="sopx">Số P Xuất</span>
                        <input type="text" class="form-control" aria-describedby="sopx" name="sopx" value="{{ $nhdpxuat->nhdSoPx }}" disabled>
                    </div>

                    <!-- Tên Vật Tư -->
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="ngayxuat">Ngày Xuất</span>
                        <input type="date" class="form-control" aria-describedby="ngayxuat" name="ngayxuat" value="{{ old('ngayxuat', $nhdpxuat->nhdNgayXuat) }}">
                        @error('ngayxuat')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Đơn Vị Tính -->
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="tenkh">Tên Khách Hàng</span>
                        <input type="text" class="form-control" aria-describedby="tenkh" name="tenkh" value="{{ old('tenkh', $nhdpxuat->nhdTenKH) }}">
                        @error('tenkh')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="card-footer">
                        <input type="submit" class="btn btn-primary" value="Cập nhật">
                        <a href="/nhdpxuat" class="btn btn-secondary">Trở lại</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>