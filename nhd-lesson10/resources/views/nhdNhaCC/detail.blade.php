<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>chi tiết Vật Tư</title>
      <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container border my-3">
        <div class="card">
            <div class="card-header">
                <h1>Chi Tiết Nhà Cung Cấp</h1>
            </div>
            <div class="card-body">
                <p class="card-text">
                    <b>Mã Nhà Cung Cấp:</b>
                    {{$nhdnhacc->nhdMaNCC}}
                </p>
                <p class="card-text">
                    <b>Tên Nhà Cung Cấp:</b>
                    {{$nhdnhacc->nhdTenNCC}}
                </p>
                <p class="card-text">
                    <b>Địa Chỉ:</b>
                    {{$nhdnhacc->nhdDiachi}}
                </p>
                <p class="card-text">
                    <b>Điện Thoại:</b>
                    {{$nhdnhacc->nhdDienThoai}}
                </p>
                <p class="card-text">
                    <b>Email:</b>
                    {{$nhdnhacc->nhdEmail}}
                </p>
                <p class="card-text">
                    <b>Trạng Thái:</b>
                    {{$nhdnhacc->nhdStatus}}
                </p>
                
            </div>
            <div class="card-footer">
                <button class="btn btn-primary"><a href="/nhdnhacc" style="color: black">back</a></button>
            </div>
        </div>
    </section>
</body>
</html>