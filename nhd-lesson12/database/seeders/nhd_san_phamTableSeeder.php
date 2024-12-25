<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class nhd_san_phamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Chèn hoặc cập nhật sản phẩm 'VP001'
        DB::table('nhd_san_pham')->insert([
            'nhdMaSanPham' => 'VP001',
            'nhdTenSanPham' => 'Cây Phú Quý',
            'nhdHinhAnh' => asset('img/san_pham/PT001.jpg'),
            'nhdSoLuong' => 100,
            'nhdDonGia' => 699000,
            'nhdMaLoai' => 1,
            'nhdTrangThai' => 0
        ]);
        
        DB::table('nhd_san_pham')->insert([
            'nhdMaSanPham' => 'VP002',
            'nhdTenSanPham' => 'Cây Đại Phú Gia',
            'nhdHinhAnh' => asset('img/san_pham/PT001.jpg'),
            'nhdSoLuong' => 100,
            'nhdDonGia' => 550000,
            'nhdMaLoai' => 1,
            'nhdTrangThai' => 0
        ]);
        
        DB::table('nhd_san_pham')->insert([
            'nhdMaSanPham' => 'VP003',
            'nhdTenSanPham' => 'Cây Hạnh Phúc',
            'nhdHinhAnh' => asset('img/san_pham/PT001.jpg'),
            'nhdSoLuong' => 100,
            'nhdDonGia' => 250000,
            'nhdMaLoai' => 1,
            'nhdTrangThai' => 0
        ]);
        
        DB::table('nhd_san_pham')->insert([
            'nhdMaSanPham' => 'VP004',
            'nhdTenSanPham' => 'Cây Vạn Lộc',
            'nhdHinhAnh' => asset('img/san_pham/PT001.jpg'),
            'nhdSoLuong' => 100,
            'nhdDonGia' => 799000,
            'nhdMaLoai' => 1,
            'nhdTrangThai' => 0
        ]);
        
        DB::table('nhd_san_pham')->insert([
            'nhdMaSanPham' => 'PT001',
            'nhdTenSanPham' => 'Cây Thiết Mộc Lan',
            'nhdHinhAnh' => asset('img/san_pham/PT001.jpg'),
            'nhdSoLuong' => 150,
            'nhdDonGia' => 590000,
            'nhdMaLoai' => 3,
            'nhdTrangThai' => 0
        ]);
        
        DB::table('nhd_san_pham')->insert([
            'nhdMaSanPham' => 'PT002',
            'nhdTenSanPham' => 'Cây Hạnh Phúc',
            'nhdHinhAnh' => asset('img/san_pham/PT001.jpg'),
            'nhdSoLuong' => 200,
            'nhdDonGia' => 290000,
            'nhdMaLoai' => 3,
            'nhdTrangThai' => 0
        ]);
        
        DB::table('nhd_san_pham')->insert([
            'nhdMaSanPham' => 'PT003',
            'nhdTenSanPham' => 'Cây Trường Sinh',
            'nhdHinhAnh' => asset('img/san_pham/PT001.jpg'),
            'nhdSoLuong' => 200,
            'nhdDonGia' => 299000,
            'nhdMaLoai' => 3,
            'nhdTrangThai' => 0
        ]);
        
        DB::table('nhd_san_pham')->insert([
            'nhdMaSanPham' => 'PT004',
            'nhdTenSanPham' => 'Cây Hoa Nhài',
            'nhdHinhAnh' => asset('img/san_pham/PT001.jpg'),
            'nhdSoLuong' => 300,
            'nhdDonGia' => 199000,
            'nhdMaLoai' => 3,
            'nhdTrangThai' => 0
        ]);
        
    }
}