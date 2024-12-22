<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container  my-3">
        <div class="card">
            <div class="card-header">
                <h1>Thông Tin Chi Tiết Sinh Viên</h1>
            </div>
           <div class="card-body">
            @if($NHdsinhvien)
            <p class="card-text">
                <b>Mã Sinh viên:</b>
                {{$nhdsinhvien->NHDMASINHVIEN}}
            </p>
        
            <p class="card-text">
                <b>Họ Sinh Viên:</b>
                {{$nhdsinhvien->NHDHOSV}}
            </p>
        
            <p class="card-text">
                <b>Tên Sinh Viên:</b>
                {{$nhdsinhvien->NHDTENSV}}
            </p>
        
            <p class="card-text">
                <b>Giới Tính:</b>
                {{$nhdsinhvien->NHDPHAI}}
            </p>
        
            <p class="card-text">
                <b>Năm Sinh:</b>
                {{$nhdsinhvien->NHDNGAYSINH}}
            </p>
        
            <p class="card-text">
                <b>Nơi Sinh:</b>
                {{$nhdsinhvien->NHDNOISINH}}
            </p>
        
            <p class="card-text">
                <b>Mã Khoa:</b>
                {{$nhdsinhvien->NHDMAKH}}
            </p>
        
            <p class="card-text">
                <b>Học Bổng:</b>
                {{$nhdsinhvien->NHDHOCBONG}}
            </p>
        
            <p class="card-text">
                <b>Điểm Trung Bình:</b>
                {{$nhdsinhvien->NHDDIEMTRUNGBINH}}
            </p>
        @else
            <p>Không tìm thấy sinh viên này.</p>
        @endif
           </div>
           <div class="card-footer">
            <a href="/sinhvien" class="btn btn-primary">Back</a>
           </div>
        </div>
        
    </section>
</body>
</html>