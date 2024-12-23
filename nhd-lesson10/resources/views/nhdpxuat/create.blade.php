<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm Mới Xuất</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-4">
        <div class="card">
            <div class="card-header">
                <h3>Thêm Mới P Xuất</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('nhdpxuat.nhdcreatesubmit') }}" method="POST">
                    @csrf
                    
                    <!-- Số P Xuất -->
                    <div class="mb-3">
                        <label for="sopx" class="form-label">Số P Xuất</label>
                        <input type="text" class="form-control" id="sopx" name="sopx" value="{{ old('sopx') }}" required>
                        @error('sopx')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <!-- Ngày Xuất -->
                    <div class="mb-3">
                        <label for="ngayxuat" class="form-label">Ngày Xuất</label>
                        <input type="date" class="form-control" id="ngayxuat" name="ngayxuat" value="{{ old('ngayxuat') }}" required>
                        @error('ngayxuat')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <!-- Đơn Vị Tính -->
                    <div class="mb-3">
                        <label for="tenkh" class="form-label">Tên Khách Hàng</label>
                        <input type="text" class="form-control" id="tenkh" name="tenkh" value="{{ old('tenkh') }}" required>
                        @error('tenkh')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                  

                    <!-- Submit -->
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Thêm Mới</button>
                        <a href="/nhdpxuat" class="btn btn-secondary">Trở Lại</a>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>