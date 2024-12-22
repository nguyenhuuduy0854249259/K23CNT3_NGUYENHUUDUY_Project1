<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm mới</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container border my-3">
         <!-- Kiểm tra thông báo lỗi hoặc thành công -->
         @if(session('error'))
         <div class="alert alert-danger">
             {{ session('error') }}
         </div>
     @endif
     @if(session('sinhvien-created'))
         <div class="alert alert-success">
             {{ session('sinhvien-created') }}
         </div>
     @endif
     @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif

        <form action="{{ route('nhdsinhvien.nhdCreateSubmit') }}" method="POST">
            @csrf
            <div class="card">
                <h1>Thêm mới</h1>
            </div>
            <div class="card-body">
                <!-- Mã Sinh Viên -->
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="NHDMASV">Mã Sinh Viên</span>
                    <input type="text" class="form-control" aria-describedby="NHDMASV" name="NHDMASV" value="" required>
                    @error('NHDMASV')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Họ Sinh Viên -->
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="NHDHOSV">Họ Sinh Viên</span>
                    <input type="text" class="form-control" aria-describedby="NHDHOSV" name="NHDHOSV" value="" >
                    @error('NHDHOSV')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Tên Sinh Viên -->
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="NHDTENSV">Tên Sinh Viên</span>
                    <input type="text" class="form-control" aria-describedby="NHDTENSV" name="NHDTENSV" value="" >
                    @error('NHDTENSV')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                 <!-- Giới Tính -->
                 <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="NHDPHAI">Giới Tính</span>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="NHDPHAI" value="1" id="gioitinhNam" required>
                        <label class="form-check-label" for="gioitinhNam">Nam</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="NHDPHAI" value="0" id="gioitinhNu" required>
                        <label class="form-check-label" for="gioitinhNu">Nữ</label>
                    </div>
                    @error('NHDPHAI')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Ngày Sinh -->
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="NHDNGAYSINH">Ngày Sinh</span>
                    <input type="date" class="form-control" aria-describedby="NHDNGAYSINH" name="NHDNGAYSINH" value="" >
                    @error('NHDNGAYSINH')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Nơi Sinh -->
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="NHDNOISINH">Nơi Sinh</span>
                    <input type="text" class="form-control" aria-describedby="NHDNOISINH" name="NHDNOISINH" value="" >
                    @error('NHDNOISINH')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

               <!-- Mã Khoa - Dropdown -->
               <div class="input-group input-group-sm mb-3">
                <span class="input-group-text" id="NHDMAKH">Mã Khoa</span>
                <select class="form-control" name="NHDMAKH" required>
                    <option value="">Chọn Mã Khoa</option>
                    @foreach($khoas as $khoa)
                        <!-- Hiển thị mã khoa (AV, BC) và tên khoa (Anh Văn, Block Chain) -->
                        <option value="{{ $khoa->NHDMAKHOA }}">
                            {{ $khoa->NHDMAKH}} - {{ $khoa->NHDTENKH }}
                        </option>
                    @endforeach
                </select>
                @error('NHDMAKH')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

                <!-- Học Bổng -->
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="NHDHOCBONG">Học Bổng</span>
                    <input type="number" class="form-control" aria-describedby="NHDHOCBONG" name="NHDHOCBONG" value="" step="0.01">
                    @error('NHDHOCBONG')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Điểm Trung Bình -->
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="NHDDIEMTRUNGBINH">Điểm Trung Bình</span>
                    <input type="number" class="form-control" aria-describedby="NHDDIEMTRUNGBINH" name="NHDDIEMTRUNGBINH" value="" step="0.01">
                    @error('NHDDIEMTRUNGBINH')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/sinhvien" class="btn btn-secondary">Back</a>
            </div>
        </form>
    </section>
</body>
</html>