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
            'nhdDiaChi'=>'Dồng Tháp',
            'nhdNgayDangKy'=>'2024/12/12',
            'nhdTrangThai'=>1,
        ]);

        DB::table('nhd_khach_hang')->insert([
            'nhdMaKhachHang'=>'KH002',
            'nhdHoTenKhachHang'=>'Trần Hưng Đạo',
            'nhdEmail'=>'tranhungdao@gmail.com',
            'nhdMatKhau'=>'dao123456789',
            'nhdDienThoai'=>'0856385932',
            'nhdDiaChi'=>'Phú Thọ',
            'nhdNgayDangKy'=>'2024/11/11',
            'nhdTrangThai'=>1,
        ]);

        DB::table('nhd_khach_hang')->insert([
            'nhdMaKhachHang'=>'KH003',
            'nhdHoTenKhachHang'=>'Lê Thanh Minh',
            'nhdEmail'=>'lethanhminh@gmail.com',
            'nhdMatKhau'=>'minh123456789',
            'nhdDienThoai'=>'0572857262',
            'nhdDiaChi'=>'Hà Nội',
            'nhdNgayDangKy'=>'2024/12/12',
            'nhdTrangThai'=>1,
        ]);

        DB::table('nhd_khach_hang')->insert([
            'nhdMaKhachHang'=>'KH004',
            'nhdHoTenKhachHang'=>'Nguyễn Anh Minh',
            'nhdEmail'=>'anhminh@gmail.com',
            'nhdMatKhau'=>'anh123456789',
            'nhdDienThoai'=>'0527582915',
            'nhdDiaChi'=>'Hà Nội',
            'nhdNgayDangKy'=>'2024/12/12',
            'nhdTrangThai'=>1,
        ]);
    }
}