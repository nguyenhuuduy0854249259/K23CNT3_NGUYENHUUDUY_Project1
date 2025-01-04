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
        // Chèn dữ liệu thẻ bài Yu-Gi-Oh
        DB::table('nhd_san_pham')->updateOrInsert([
            'nhdMaSanPham' => "YG001",
            'nhdTenSanPham' => "Blue-Eyes White Dragon",
            'nhdHinhAnh' => asset ("img/san_pham/Barrel Dragon.jpg"),
            'nhdSoLuong' => 50,
            'nhdDonGia' => 10000,
            'nhdMaLoai' => "L001",  // Loại thẻ bài chính
            'nhdTrangThai' => 0
        ]);
        
        DB::table('nhd_san_pham')->updateOrInsert([
            'nhdMaSanPham' => "YG002",
            'nhdTenSanPham' => "Dark Magician",
            'nhdHinhAnh' => asset("img/san_pham/Dark_Magician.webp"),
            'nhdSoLuong' => 40,
            'nhdDonGia' => 10000,
            'nhdMaLoai' => "L001",  // Loại thẻ bài chính
            'nhdTrangThai' => 0
        ]);
        
        DB::table('nhd_san_pham')->updateOrInsert([
            'nhdMaSanPham' => "YG003",
            'nhdTenSanPham' => "Red-Eyes Black Dragon",
            'nhdHinhAnh' => asset("img/san_pham/Mystic Tomato.jpg"),
            'nhdSoLuong' => 100,
            'nhdDonGia' => 10000,
            'nhdMaLoai' => "L001",  // Loại thẻ bài chính
            'nhdTrangThai' => 0
        ]);
        
        DB::table('nhd_san_pham')->updateOrInsert([
            'nhdMaSanPham' => "YG004",
            'nhdTenSanPham' => "Exodia the Forbidden One",
            'nhdHinhAnh' => asset("img/san_pham/ExodiatheForbiddenOne-LDK2-EN-C-1E.webp"),
            'nhdSoLuong' => 10,
            'nhdDonGia' => 10000,
            'nhdMaLoai' => "L001",  // Loại thẻ bài hiếm
            'nhdTrangThai' => 0
        ]);
        
        DB::table('nhd_san_pham')->updateOrInsert([
            'nhdMaSanPham' => "YG005",
            'nhdTenSanPham' => "Blue-Eyes Ultimate Dragon",
            'nhdHinhAnh' => asset("img/san_pham/Blue-Eyes_White_Dragon.webp"),
            'nhdSoLuong' => 30,
            'nhdDonGia' => 10000,
            'nhdMaLoai' => "L001",  // Loại thẻ bài hiếm
            'nhdTrangThai' => 0
        ]);
        
        DB::table('nhd_san_pham')->updateOrInsert([
            'nhdMaSanPham' => "YG006",
            'nhdTenSanPham' => "Cyber Dragon",
            'nhdHinhAnh' => asset("img/san_pham/Pot of Avarice.jpg"),
            'nhdSoLuong' => 70,
            'nhdDonGia' => 10000,
            'nhdMaLoai' => "L001",  // Loại thẻ bài chính
            'nhdTrangThai' => 0
        ]);
        
        DB::table('nhd_san_pham')->updateOrInsert([
            'nhdMaSanPham' => "YG007",
            'nhdTenSanPham' => "Dark Magician Girl",
            'nhdHinhAnh' => asset("img/san_pham/Pot of Avarice.jpg"),
            'nhdSoLuong' => 80,
            'nhdDonGia' => 10000,
            'nhdMaLoai' => "L001",  // Loại thẻ bài chính
            'nhdTrangThai' => 0
        ]);
        
        DB::table('nhd_san_pham')->updateOrInsert([
            'nhdMaSanPham' =>"YG008",
            'nhdTenSanPham' => "Monster Reborn",
            'nhdHinhAnh' => asset("img/san_pham/Man-Eater Bug.jpg"),
            'nhdSoLuong' => 150,
            'nhdDonGia' => 10000,
            'nhdMaLoai' => "L001",  // Loại thẻ bài phép
            'nhdTrangThai' => 0
        ]);
    }
}
