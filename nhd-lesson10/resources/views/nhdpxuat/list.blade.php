<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh Sách Xuất</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
</head>
<body>
    <section class="container border my-3">
        <h1 class="mb-4">Danh Sách Xuất</h1>

        <!-- Thông báo thành công -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Số PXuat</th>
                    <th>Ngày Xuất</th>
                    <th>Tên Khách Hàng</th>
                    <th>Chức Năng</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nhdpxuat as $index => $item)
                    <tr>
                        <!-- Calculate STT dynamically based on page number -->
                        <td>{{ ($nhdpxuat->currentPage() - 1) * $nhdpxuat->perPage() + $index + 1 }}</td>
                        <td>{{ $item->nhdSoPx }}</td>
                        <td>{{ $item->nhdNgayXuat }}</td>
                        <td>{{ $item->nhdTenKH }}</td>
                        <td class="text-center">
                            <!-- Các nút xem, chỉnh sửa, xóa trên cùng 1 dòng -->
                            <div class="btn-group" role="group">
                                <!-- Xem chi tiết -->
                                <a href="/nhdpxuat/detail/{{ $item->nhdSoPx }}" class="btn btn-success btn-sm">
                                    <i class="fa-solid fa-eye"></i> Xem
                                </a>
                                <!-- Chỉnh sửa -->
                                <a href="/nhdpxuat/edit/{{ $item->nhdSoPx }}" class="btn btn-primary btn-sm">
                                    <i class="fa-solid fa-pen"></i> Chỉnh sửa
                                </a>
                                <!-- Xóa -->
                                <a href="/nhdpxuat/delete/{{ $item->nhdSoPx }}" class="btn btn-danger btn-sm"
                                   onclick="return confirm('Bạn muốn xóa vật tư không? Mã: {{ $item->nhdSoPx }}');">
                                    <i class="fa-regular fa-trash-can"></i> Xóa
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Phân trang -->
        <div class="d-flex justify-content-center mt-3">
            {{ $nhdpxuat->links('pagination::bootstrap-5') }}
        </div>

        <!-- Thêm mới -->
        <div class="text-end mt-3">
            <a href="/nhdpxuat/create" class="btn btn-success">
                <i class="fa-solid fa-plus"></i> Thêm Mới Xuất
            </a>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>