<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm Mới Vật Tư</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-4">
        <div class="card">
            <div class="card-header">
                <h3>Thêm Mới Vật Tư</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('nhdvattu.nhdcreatesubmit') }}" method="POST">
                    @csrf
                    
                    <!-- Mã Vật Tư -->
                    <div class="mb-3">
                        <label for="mavattu" class="form-label">Mã Vật Tư</label>
                        <input type="text" class="form-control" id="mavattu" name="mavattu" value="{{ old('mavattu') }}" required>
                        @error('mavattu')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <!-- Tên Vật Tư -->
                    <div class="mb-3">
                        <label for="tenvattu" class="form-label">Tên Vật Tư</label>
                        <input type="text" class="form-control" id="tenvattu" name="tenvattu" value="{{ old('tenvattu') }}" required>
                        @error('tenvattu')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <!-- Đơn Vị Tính -->
                    <div class="mb-3">
                        <label for="donvitinh" class="form-label">Đơn Vị Tính</label>
                        <input type="text" class="form-control" id="donvitinh" name="donvitinh" value="{{ old('donvitinh') }}" required>
                        @error('donvitinh')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <!-- Phần Trăm -->
                    <div class="mb-3">
                        <label for="phantram" class="form-label">Phần Trăm</label>
                        <input type="number" class="form-control" id="phantram" name="phantram" value="{{ old('phantram') }}" required min="0" max="100">
                        @error('phantram')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Submit -->
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Thêm Mới</button>
                        <a href="/nhdvattu" class="btn btn-secondary">Trở Lại</a>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>