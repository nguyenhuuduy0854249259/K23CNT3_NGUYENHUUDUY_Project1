<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class nhd_hoa_donTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

    // Tìm khách hàng có mã 'KH001'
    $customer = DB::table('nhd_khach_hang')->where('nhdMaKhachHang', 'KH001')->first();

    // Kiểm tra nếu khách hàng không tồn tại
    if (!$customer) {
        // Nếu khách hàng không tồn tại, tạo một lỗi để dừng việc seeding
        throw new \Exception('Khách hàng với mã KH001 không tồn tại trong bảng nhd_khach_hang');
    }

        // Tạo hóa đơn cho khách hàng KH001
    DB::table('nhd_hoa_don')->insert([
        'nhdMaHoaDon' => 'HD001',
        'nhdMaKhachHang' => $customer->id, // Lấy ID từ khách hàng
        'nhdNgayHoaDon'=>'2024-12-20',
        'nhdNgayNhan'=>'2024-12-20',
        'nhdHoTenKhachHang'=>'Nguyễn Hữu Duy',
        'nhdEmail'=>'nguyenhuuduy@gmail.com',
        'nhdDienThoai'=>'012550036',
        'nhdDiaChi'=>'Dồng Tháp',
        'nhdTongGiaTri' => 60000, // Tổng giá trị (cần tính dựa trên chi tiết hóa đơn)
        'nhdTrangThai' => 1, // Trạng thái: đã thanh toán
    ]);

    // Tạo hóa đơn cho khách hàng KH002
    DB::table('nhd_hoa_don')->insert([
        'nhdMaHoaDon' => 'HD002',
        'nhdMaKhachHang' => $customer->id, // Lấy ID từ khách hàng
        'nhdNgayHoaDon'=>'2024-12-20',
        'nhdNgayNhan'=>'2024-12-20',
        'nhdHoTenKhachHang'=>'Trần Hưng Đạo',
        'nhdEmail'=>'tranhungdao@gmail.com',
        'nhdDienThoai'=>'0856385932',
        'nhdDiaChi'=>'Phú Thọ',
        'nhdTongGiaTri' => 20000,
        'nhdTrangThai' => 1,
    ]);

    }
}