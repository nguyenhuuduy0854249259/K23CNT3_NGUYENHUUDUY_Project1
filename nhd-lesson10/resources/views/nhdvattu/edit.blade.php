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
                <form action="{{ route('nhdvattu.nhdeditsubmit', $nhdvattu->nhdMaVTu) }}" method="POST">
                    @csrf

                    <!-- Mã Vật Tư (disabled) -->
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="mavattu">Mã Vật Tư</span>
                        <input type="text" class="form-control" aria-describedby="mavattu" name="mavattu" value="{{ $nhdvattu->nhdMaVTu }}" disabled>
                    </div>

                    <!-- Tên Vật Tư -->
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="tenvattu">Tên Vật Tư</span>
                        <input type="text" class="form-control" aria-describedby="tenvattu" name="tenvattu" value="{{ old('tenvattu', $nhdvattu->nhdTenVTu) }}">
                        @error('tenvattu')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Đơn Vị Tính -->
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="donvitinh">Đơn Vị Tính</span>
                        <input type="text" class="form-control" aria-describedby="donvitinh" name="donvitinh" value="{{ old('donvitinh', $nhdvattu->nhdDVTinh) }}">
                        @error('donvitinh')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Phần Trăm -->
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="phantram">Phần Trăm</span>
                        <input type="number" class="form-control" aria-describedby="phantram" name="phantram" value="{{ old('phantram', $nhdvattu->nhdPhanTram) }}" min="0" max="100">
                        @error('phantram')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="card-footer">
                        <input type="submit" class="btn btn-primary" value="Cập nhật">
                        <a href="/nhdvattu" class="btn btn-secondary">Trở lại</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>