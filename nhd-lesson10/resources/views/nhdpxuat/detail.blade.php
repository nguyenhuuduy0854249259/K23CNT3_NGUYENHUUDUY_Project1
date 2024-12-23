<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>chi tiết Xuất</title>
      <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container border my-3">
        <div class="card">
            <div class="card-header">
                <h1>Chi Tiết Xuất</h1>
            </div>
            <div class="card-body">
                <p class="card-text">
                    <b>Số P Xuất:</b>
                    {{$nhdpxuat->nhdSoPx}}
                </p>
                <p class="card-text">
                    <b>Ngày Xuất:</b>
                    {{$nhdpxuat->nhdNgayXuat}}
                </p>
                <p class="card-text">
                    <b>Tên Khách Hàng:</b>
                    {{$nhdpxuat->nhdTenKH}}
                </p>
                
            </div>
            <div class="card-footer">
                <button class="btn btn-primary"><a href="/nhdpxuat" style="color: black">back</a></button>
            </div>
        </div>
    </section>
</body>
</html>