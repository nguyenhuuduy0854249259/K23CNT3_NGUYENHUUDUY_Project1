<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách nhà cung cấp</title>
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <header class="container my -3">
        <h1>Danh sách nhà cung cấp</h1>
    </header>
    <section class="container my -1 border p-2">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mã nhà cung cấp</th>
                    <th>#tên nhà cung cấp</th>
                    <th>địa chỉ</th>
                    <th>Diện thoại</th>
                    <th>email</th>
                    <th>chức năng</th>
                    
                </tr>
            </thead>
            <tbody>
                @forelse ($nhdNhaCC as $item)
                <tr>
                    <td>{{ ($nhdNhaCC ->currentPage() - 1) * $nhdNhaCC ->perPage() + $loop->index + 1 }}</td>
                    <td>{{$item->nhdMaNCC}}</td>
                    <td>{{$item->nhdTenNCC}}</td>
                    <td>{{$item->nhdDiachi}}</td>
                    <td>{{$item->nhdDienthoai}}</td>
                    <td>{{$item->nhdEmail}}</td>
                    <td class="text-center">
                        <!-- Các nút xem, chỉnh sửa, xóa trên cùng 1 dòng -->
                        <div class="btn-group" role="group">
                            <!-- Xem chi tiết -->
                            <a href="/nhdnhacc/detail/{{ $item->nhdMaNCC }}" class="btn btn-success btn-sm">
                                <i class="fa-solid fa-eye"></i> Xem
                            </a>
                            <!-- Chỉnh sửa -->
                            <a href="/nhdnhacc/edit/{{ $item->nhdMaNCC }}" class="btn btn-primary btn-sm">
                                <i class="fa-solid fa-pen"></i> Chỉnh sửa
                            </a>
                            <!-- Xóa -->
                            <a href="/nhdnhacc/delete/{{ $item->nhdMaNCC }}" class="btn btn-danger btn-sm"
                               onclick="return confirm('Bạn muốn xóa nhà cung cấp này không? Mã: {{ $item->nhdMaNCC }}');">
                                <i class="fa-regular fa-trash-can"></i> Xóa
                            </a>
                        </div>
                    </td>

                </tr>

                @empty
                    <tr>
                        <td colspan="7">chưa có dữ liệu</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

          <!-- Phân trang -->
          <div class="d-flex justify-content-center mt-3">
            {{ $nhdNhaCC->links('pagination::bootstrap-5') }}
        </div>

        <!-- Thêm mới nhà cung cấp -->
        <div class="text-end mt-3">
            <a href="/nhdnhacc/create" class="btn btn-success">
                <i class="fa-solid fa-plus"></i> Thêm Mới Nhà Cung Cấp
            </a>
        </div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>