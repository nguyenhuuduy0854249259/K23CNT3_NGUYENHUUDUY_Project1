<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class nhd_ct_hoa_donTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            //
            // Thêm chi tiết cho hóa đơn HD001
        DB::table('nhd_ct_hoa_don')->insert([
            'nhdHoaDonID' => '1',
            'nhdSanPhamID' => '001', // Blue-Eyes White Dragon
            'nhdSoLuongMua' => 3,
            'nhdDonGiaMua' => 10000, // Giá tại thời điểm mua
            'nhdThanhTien' => 30000, // Số lượng * Đơn giá
            'nhdTrangThai' => 1, // Trạng thái: hợp lệ
        ]);

        DB::table('nhd_ct_hoa_don')->insert([
            'nhdHoaDonID' => '1',
            'nhdSanPhamID' => '002', // Dark Magician
            'nhdSoLuongMua' => 2,
            'nhdDonGiaMua' => 10000,
            'nhdThanhTien' => 20000,
            'nhdTrangThai' => 1,
        ]);

        DB::table('nhd_ct_hoa_don')->insert([
            'nhdHoaDonID' => '1',
            'nhdSanPhamID' => '005', // Blue-Eyes Ultimate Dragon
            'nhdSoLuongMua' => 1,
            'nhdDonGiaMua' => 10000,
            'nhdThanhTien' => 10000,
            'nhdTrangThai' => 1,
        ]);

    }
}