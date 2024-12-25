<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh Sách Vật Tư</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
</head>
<body>
    <section class="container border my-3">
        <div class="card">
            <div class="card-header">
                <h1>Danh Sách Vật Tư</h1>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Mã Vật Tư</th>
                            <th>Tên Vật Tư</th>
                            <th>Đơn Vị Tính</th>
                            <th>Phần Trăm</th>
                            <th>Chức Năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $stt = 0;
                        @endphp
                        @foreach ($nhdvattu as $item)
                            @php
                                $stt++;   
                            @endphp
                            <tr>
                                <td>{{ $stt }}</td>
                                <td>{{ $item->nhdMaVTu }}</td>
                                <td>{{ $item->nhdTenVTu }}</td>
                                <td>{{ $item->nhdDVTinh }}</td>
                                <td>{{ $item->nhdPhanTram }}</td>
                                <td class="text-center">
                                    <!-- Xem chi tiết -->
                                    <a href="/nhdvattu/detail/{{ $item->nhdMaVTu }}" class="btn btn-success">
                                        <i class="fa-solid fa-eye-low-vision"></i>
                                    </a>
                                    <!-- Chỉnh sửa -->
                                    <a href="/nhdvattu/edit/{{ $item->nhdMaVTu }}" class="btn btn-primary">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                    <!-- Xóa -->
                                    <a href="/nhdvattu/delete/{{ $item->nhdMaVTu }}" class="btn btn-danger"
                                       onclick="return confirm('Bạn muốn xóa vật tư không? Mã: ' + '{{ $item->nhdMaVTu }}');">
                                        <i class="fa-regular fa-trash-can"></i> Xóa
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                    </tbody>
                </table>
            </div>

            <div class="card-footer">
                <!-- Tổng số vật tư -->
                <h3>Tổng số: {{ $nhdvattu->count() }}</h3>
                <!-- Thêm mới -->
                <a href="/nhdvattu/create" class="btn btn-primary">Thêm mới</a>

                <!-- Phân trang -->
                <div class="d-flex justify-content-center mt-3">
                    {{ $nhdvattu->links() }}
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>