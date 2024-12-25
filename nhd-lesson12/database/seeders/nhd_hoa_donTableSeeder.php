<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class nhd_HOA_DONTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('nhd_HOA_DON')->insert([
            'nhdMaHoaDon'=>'HD001',
            'nhdMaKhachHang'=>1,
            'nhdNgayHoaDon'=>'2024/12/12',
            'nhdNgayNhan'=>'2024/12/12',
            'nhdHoTenKhachHang'=>'Nguyễn Hữu Duy',
            'nhdEmail'=>'nguyenhuuduy@gmail.com',
            'nhdDienThoai'=>'012550036',
            'nhdDiaChi'=>'Yên Bái-Yên Bình',
            'nhdTongGiaTri'=>'790000',
            'nhdTrangThai'=>2,
        ]);

        DB::table('nhd_HOA_DON')->insert([
            'nhdMaHoaDon'=>'HD002',
            'nhdMaKhachHang'=>2,
            'nhdNgayHoaDon'=>'2024/12/20',
            'nhdNgayNhan'=>'2024/12/21',
            'nhdHoTenKhachHang'=>'Trần Tuấn Hưng',
            'nhdEmail'=>'hungtran@gmail.com',
            'nhdDienThoai'=>'012588868',
            'nhdDiaChi'=>'Phú Thọ',
            'nhdTongGiaTri'=>'125000',
            'nhdTrangThai'=>0,
        ]);

        DB::table('nhd_HOA_DON')->insert([
            'nhdMaHoaDon'=>'HD003',
            'nhdMaKhachHang'=>3,
            'nhdNgayHoaDon'=>'2024/12/17',
            'nhdNgayNhan'=>'2024/12/17',
            'nhdHoTenKhachHang'=>'Phan Quang Minh',
            'nhdEmail'=>'pminh@gmail.com',
            'nhdDienThoai'=>'0382550508',
            'nhdDiaChi'=>'Phú Thọ',
            'nhdTongGiaTri'=>'999000',
            'nhdTrangThai'=>1,
        ]);

        DB::table('nhd_HOA_DON')->insert([
            'nhdMaHoaDon'=>'HD004',
            'nhdMaKhachHang'=>1,
            'nhdNgayHoaDon'=>'2024/12/12',
            'nhdNgayNhan'=>'2024/12/12',
            'nhdHoTenKhachHang'=>'Vũ Tiến Đức',
            'nhdEmail'=>'vuducc@gmail.com',
            'nhdDienThoai'=>'012550036',
            'nhdDiaChi'=>'Yên Bái-Yên Bình',
            'nhdTongGiaTri'=>'660000',
            'nhdTrangThai'=>1,
        ]);

        DB::table('nhd_HOA_DON')->insert([
            'nhdMaHoaDon'=>'HD005',
            'nhdMaKhachHang'=>4,
            'nhdNgayHoaDon'=>'2024/12/03',
            'nhdNgayNhan'=>'2024/12/04',
            'nhdHoTenKhachHang'=>'Phạm Tùng Quân',
            'nhdEmail'=>'quanpham@gmail.com',
            'nhdDienThoai'=>'094357152',
            'nhdDiaChi'=>'Hà Nội',
            'nhdTongGiaTri'=>'777999',
            'nhdTrangThai'=>1,
        ]);
    }
}