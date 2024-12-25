@extends('_layouts.admins._master')
@section('title', 'Quản Trị Nội Dung')
@section('content-body')
    <div class="container">
        <!-- Tiêu đề chính -->
        <div class="row border mb-4">
            <h1 class="col-12 py-3 text-center">Thống Kê Hệ Thống</h1>
        </div>

        <!-- Các thông tin thống kê cơ bản -->
        <div class="row text-center">
            <!-- Số lượng người dùng -->
            <div class="col-md-3 mb-4">
                <div class="card text-white bg-primary shadow">
                    <div class="card-header">
                        <h5 class="mb-0">Số Lượng Người Dùng</h5>
                    </div>
                    <div class="card-body">
                        <h2 class="card-title">1,250</h2>
                        <p class="card-text">Người dùng đã đăng ký</p>
                    </div>
                </div>
            </div>

            <!-- Số bài viết -->
            <div class="col-md-3 mb-4">
                <div class="card text-white bg-success shadow">
                    <div class="card-header">
                        <h5 class="mb-0">Số Bài Viết</h5>
                    </div>
                    <div class="card-body">
                        <h2 class="card-title">825</h2>
                        <p class="card-text">Bài viết đã đăng</p>
                    </div>
                </div>
            </div>

            <!-- Số lượt truy cập -->
            <div class="col-md-3 mb-4">
                <div class="card text-white bg-warning shadow">
                    <div class="card-header">
                        <h5 class="mb-0">Lượt Truy Cập</h5>
                    </div>
                    <div class="card-body">
                        <h2 class="card-title">32,540</h2>
                        <p class="card-text">Tổng lượt truy cập</p>
                    </div>
                </div>
            </div>

            <!-- Số lượng bình luận -->
            <div class="col-md-3 mb-4">
                <div class="card text-white bg-info shadow">
                    <div class="card-header">
                        <h5 class="mb-0">Số Lượng Bình Luận</h5>
                    </div>
                    <div class="card-body">
                        <h2 class="card-title">5,345</h2>
                        <p class="card-text">Bình luận đã đăng</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Các thông tin thống kê mở rộng -->
        <div class="row text-center">
            <!-- Thời gian truy cập trung bình -->
            <div class="col-md-4 mb-4">
                <div class="card text-white bg-secondary shadow">
                    <div class="card-header">
                        <h5 class="mb-0">Thời Gian Truy Cập Trung Bình</h5>
                    </div>
                    <div class="card-body">
                        <h2 class="card-title">2 giờ 15 phút</h2>
                        <p class="card-text">Thời gian trung bình mỗi ngày</p>
                    </div>
                </div>
            </div>

            <!-- Tỷ lệ chuyển đổi -->
            <div class="col-md-4 mb-4">
                <div class="card text-white bg-danger shadow">
                    <div class="card-header">
                        <h5 class="mb-0">Tỷ Lệ Chuyển Đổi</h5>
                    </div>
                    <div class="card-body">
                        <h2 class="card-title">15.8%</h2>
                        <p class="card-text">Chuyển từ khách truy cập sang đăng ký</p>
                    </div>
                </div>
            </div>

            <!-- Tương tác hàng tháng -->
            <div class="col-md-4 mb-4">
                <div class="card text-white bg-dark shadow">
                    <div class="card-header">
                        <h5 class="mb-0">Tương Tác Hàng Tháng</h5>
                    </div>
                    <div class="card-body">
                        <h2 class="card-title">1,250</h2>
                        <p class="card-text">Lượt tương tác trung bình</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Biểu đồ thống kê -->
        <div class="row mb-4">
            <div class="col-12">
                <h4 class="mb-3">Biểu đồ lượt truy cập theo tháng</h4>
                <canvas id="trafficChart"></canvas>
            </div>
        </div>

        <!-- Bảng chi tiết hệ thống -->
        <div class="row">
            <div class="col-12">
                <h4 class="mb-3">Chi Tiết Hệ Thống</h4>
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Tên Hệ Thống</th>
                            <th scope="col">Trạng Thái</th>
                            <th scope="col">Ngày Cập Nhật</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Hệ Thống Quản Lý Nội Dung</td>
                            <td><span class="badge bg-success">Hoạt Động</span></td>
                            <td>20/12/2024</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Hệ Thống Thống Kê</td>
                            <td><span class="badge bg-warning">Bảo Trì</span></td>
                            <td>15/12/2024</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Hệ Thống Gửi Thông Báo</td>
                            <td><span class="badge bg-danger">Lỗi</span></td>
                            <td>18/12/2024</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Script để vẽ biểu đồ -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('trafficChart').getContext('2d');
        var trafficChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: 'Lượt Truy Cập',
                    data: [1200, 1900, 1500, 2200, 1800, 2500, 2700, 2400, 2600, 2800, 3000, 3200],
                    fill: false,
                    borderColor: 'rgba(75, 192, 192, 1)',
                    tension: 0.1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                },
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Tháng'
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Lượt Truy Cập'
                        },
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

       
   @endsection
                