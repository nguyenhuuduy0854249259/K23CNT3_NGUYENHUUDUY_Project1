<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Danh sách môn học</title>
</head>
<body>
    <section class="container my-3">
        <div class="card">
            <div class="card-header">
                <h1>Danh sách môn học</h1>
            </div>
            <div class="card-body">
                <table class="table table-bordered"> 
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>MÃ môn học</th>
                            <th>Tên môn học</th>
                            <th>Số tiết</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $stt=0;
                        @endphp
                        @foreach ($nhdmonhoc as $item)
                                @php
                                    $stt++;
                                @endphp
                            <tr>
                                <th>{{$stt}}</th>
                                <td>{{$item->NHDMAMH}}</td>
                                <td>{{$item->NHDTENMH}}</td>
                                <td>{{$item->NHDSOTIET}}</td>
                                <td>
                                    <a href="/monhoc/nhddetail/{{$item->NHDMAMH}}" class="btn btn-success">
                                        Chi tiết
                                    </a>
                                    <a href="/monhoc/edit/{{$item->NHDMAMH}}" class="btn btn-primary">
                                        Sửa
                                    </a>
                                    <a href="/monhoc/delete/{{$item->NHDMAMH}}" class="btn btn-danger">                   
                                        Xóa
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>         <!-- thống kê -->
                        <tr>
                            <th colspan="5">
                                <h3>Tổng số môn học : {{$nhdmonhoc->count()}}</h3>
                            </th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </section>
</body>
</html>