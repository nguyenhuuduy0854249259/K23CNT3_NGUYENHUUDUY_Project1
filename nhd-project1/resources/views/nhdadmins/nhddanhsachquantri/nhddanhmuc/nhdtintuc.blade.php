@extends('_layouts.admins._master')

@section('title', 'Nhu Cầu Thị Trường Trò Chơi Thẻ Bài')

@section('content-body')
    <div class="container mt-5">
        <h1 class="text-center text-primary mb-4" style="font-family: 'Roboto', sans-serif;">Nhu Cầu Thị Trường Trò Chơi Thẻ Bài Yu-Gi-Oh</h1>

        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="text-center">STT</th>
                    <th scope="col" class="text-center">Xu Hướng Tiêu Thụ</th>
                    <th scope="col" class="text-center">Độ Tuổi Người Dùng</th>
                    <th scope="col" class="text-center">Nhu Cầu Chính</th>
                    <th scope="col" class="text-center">Tính Năng Ưu Tiên</th>
                    <th scope="col" class="text-center">Thị Trường Mới</th>
                    <th scope="col" class="text-center">Thương Hiệu Phổ Biến</th>
                    <th scope="col" class="text-center">Mức Giá Phổ Biến</th>
                    <th scope="col" class="text-center">Công Nghệ Xu Hướng</th>
                    <th scope="col" class="text-center">Ngày Cập Nhật</th>
                </tr>
            </thead>
            
            <tbody>
                <!-- Ví dụ dòng cho "Bộ bài Yu-Gi-Oh cơ bản" -->
                <tr class="text-center">
                    <td>1</td>
                    <td>Bộ bài Yu-Gi-Oh cơ bản</td>
                    <td>12-18 tuổi</td>
                    <td>Xây dựng bộ bài, chơi trong các giải đấu nhỏ</td>
                    <td>Thẻ bài phổ biến, dễ chơi, dễ hiểu</td>
                    <td>Châu Á, Bắc Mỹ, Châu Âu</td>
                    <td>Konami, Yu-Gi-Oh!</td>
                    <td>500.000 VND - 1 triệu VND</td>
                    <td>Thẻ bài cơ bản, Thẻ bài từ các bộ phim</td>
                    <td>25/12/2023</td>
                </tr>

                <!-- Ví dụ dòng cho "Bộ bài Yu-Gi-Oh chuyên nghiệp" -->
                <tr class="text-center">
                    <td>2</td>
                    <td>Bộ bài Yu-Gi-Oh chuyên nghiệp</td>
                    <td>18-30 tuổi</td>
                    <td>Xây dựng bộ bài mạnh mẽ cho giải đấu lớn</td>
                    <td>Thẻ bài mạnh, chiến thuật phức tạp</td>
                    <td>Châu Á, Bắc Mỹ</td>
                    <td>Konami, Yu-Gi-Oh!</td>
                    <td>1 triệu VND - 5 triệu VND</td>
                    <td>Thẻ bài Siêu Rarity, Thẻ bài có giá trị cao</td>
                    <td>22/12/2023</td>
                </tr>

                <!-- Ví dụ dòng cho "Thẻ bài Yu-Gi-Oh hiếm" -->
                <tr class="text-center">
                    <td>3</td>
                    <td>Thẻ bài Yu-Gi-Oh hiếm</td>
                    <td>25-40 tuổi</td>
                    <td>Sưu tầm thẻ bài hiếm, tăng giá trị bộ sưu tập</td>
                    <td>Thẻ bài hiếm, giá trị cao</td>
                    <td>Châu Á, Bắc Mỹ, Châu Âu</td>
                    <td>Konami, Yu-Gi-Oh!</td>
                    <td>5 triệu VND - 50 triệu VND</td>
                    <td>Thẻ bài 1st Edition, Thẻ bài đặc biệt</td>
                    <td>18/12/2023</td>
                </tr>

                <!-- Ví dụ dòng cho "Game thẻ bài Yu-Gi-Oh trên điện thoại" -->
                <tr class="text-center">
                    <td>4</td>
                    <td>Game thẻ bài Yu-Gi-Oh trên điện thoại</td>
                    <td>15-30 tuổi</td>
                    <td>Chơi Yu-Gi-Oh trực tuyến, đấu với bạn bè hoặc AI</td>
                    <td>Thẻ bài điện tử, đấu trực tuyến</td>
                    <td>Châu Á, Bắc Mỹ</td>
                    <td>Konami, Yu-Gi-Oh!</td>
                    <td>Miễn phí hoặc mua thẻ bài ảo</td>
                    <td>Game mobile, Đấu trường trực tuyến</td>
                    <td>15/12/2023</td>
                </tr>

                <!-- Ví dụ dòng cho "Sự kiện Yu-Gi-Oh trực tiếp" -->
                <tr class="text-center">
                    <td>5</td>
                    <td>Sự kiện Yu-Gi-Oh trực tiếp</td>
                    <td>18-35 tuổi</td>
                    <td>Tham gia các sự kiện trực tiếp, gặp gỡ cộng đồng</td>
                    <td>Giải đấu trực tiếp, gặp gỡ các nhân vật nổi tiếng</td>
                    <td>Châu Á, Bắc Mỹ</td>
                    <td>Konami, Yu-Gi-Oh!</td>
                    <td>Đăng ký tham gia sự kiện</td>
                    <td>Thẻ bài mới ra mắt, Mở rộng bộ bài</td>
                    <td>10/12/2023</td>
                </tr>
            </tbody>
        </table>

        <!-- Nút Quay lại -->
        <div class="text-center mt-3">
            <a href="{{ route('nhdadmins.nhddanhsachquantri.danhmuc') }}" class="btn btn-secondary">Quay lại</a>
        </div>
    </div>
@endsection
