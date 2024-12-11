<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Danh sách khoa</title>
</head>
<body>
    <section class="container border my-3">
        <h1>Danh sách khoa</h1>
        <button class="btn-secondary"><a href="/khoa/create">Thêm mới</a></button>
        <table class="table table-bordered">
        <thead>
            <tr>    
                <th>#</th>
                <th>Mã khoa</th>
                <th>Tên khoa</th>
                <th>Chức năng</th>
            </tr>
        </thead>
        <tbody>
            @php
                $stt=0;
            @endphp
            @foreach ($nhdkhoa as $item)
                    @php
                        $stt++;
                    @endphp
            <tr>
                <th>{{$stt}}</th>
                <td>{{$item->NHDMAKH}}</td>
                <td>{{$item->NHDTENKH}}</td>
            <td>
                <a href="/khoa/nhddetail/{{$item->NHDMAKH}}" class="btn btn-success">
                    Chi tiết
                    <i class="fas fa-search"></i>
                </a>
                <a href="/khoa/edit/{{$item->NHDMAKH}}" class="btn btn-primary">
                    Sửa
                    <i class="fas fa-sad-tear"></i>
                </a>
                <a href="/khoa/delete/{{$item->NHDMAKH}}" class="btn btn-danger">                   
                    Xóa
                </a>
                <a href="/khoa/delete/{{$item->NHDMAKH}}" class="btn btn-danger"
                    onclick="return (comfirm('Bạn có muốn chắc chắn xóa không nhỉ!'))" 
                    >                    
                    <i class="fas fa-trash-alt"></i> 
                </a>

            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </section>
</body>
</html>