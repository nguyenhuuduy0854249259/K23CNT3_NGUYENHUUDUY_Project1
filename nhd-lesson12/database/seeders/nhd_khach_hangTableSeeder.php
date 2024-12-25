<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class nhd_khach_hangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('nhd_khach_hang')->insert([
            'nhdMaKhachHang'=>'KH001',
            'nhdHoTenKhachHang'=>'Nguyễn Hữu Duy',
            'nhdEmail'=>'nguyenhuuduy@gmail.com',
            'nhdMatKhau'=>'123456a@',
            'nhdDienThoai'=>'012550036',
            'nhdDiaChi'=>'Yên Bái-Yên Bình',
            'nhdNgayDangKy'=>'2024/12/12',
            'nhdTrangThai'=>0,
        ]);

        DB::table('nhd_khach_hang')->insert([
            'nhdMaKhachHang'=>'KH002',
            'nhdHoTenKhachHang'=>'Trần Tuấn Hưng',
            'nhdEmail'=>'hungtran@gmail.com',
            'nhdMatKhau'=>'hungyb123',
            'nhdDienThoai'=>'012588868',
            'nhdDiaChi'=>'Phú Thọ',
            'nhdNgayDangKy'=>'2024/12/20',
            'nhdTrangThai'=>0,
        ]);

        DB::table('nhd_khach_hang')->insert([
            'nhdMaKhachHang'=>'KH003',
            'nhdHoTenKhachHang'=>'Phan Quang Minh',
            'nhdEmail'=>'pminh@gmail.com',
            'nhdMatKhau'=>'pminh3366',
            'nhdDienThoai'=>'0382550508',
            'nhdDiaChi'=>'Phú Thọ',
            'nhdNgayDangKy'=>'2024/12/17',
            'nhdTrangThai'=>2,
        ]);

        DB::table('nhd_khach_hang')->insert([
            'nhdMaKhachHang'=>'KH004',
            'nhdHoTenKhachHang'=>'Phạm Tùng Quân',
            'nhdEmail'=>'quanpham@gmail.com',
            'nhdMatKhau'=>'quanpham98',
            'nhdDienThoai'=>'094357152',
            'nhdDiaChi'=>'Hà Nội',
            'nhdNgayDangKy'=>'2024/12/03',
            'nhdTrangThai'=>0,
        ]);
    }
}