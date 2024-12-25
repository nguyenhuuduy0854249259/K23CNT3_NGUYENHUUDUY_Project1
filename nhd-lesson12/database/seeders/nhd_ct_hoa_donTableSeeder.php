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
        DB::table('nhd_ct_hoa_don')->insert([
            'nhdHoaDonID'=>1,
            'nhdSanPhamID'=>1,
            'nhdSoLuongMua'=>12,
            'nhdDonGiaMua'=>699000,
            'nhdThanhTien'=>699000 * 12,
            'nhdTrangThai'=>0,
        ]);

        DB::table('nhd_ct_hoa_don')->insert([
            'nhdHoaDonID'=>2,
            'nhdSanPhamID'=>2,
            'nhdSoLuongMua'=>20,
            'nhdDonGiaMua'=>550000,
            'nhdThanhTien'=>550000 * 20,
            'nhdTrangThai'=>0,
        ]);

        DB::table('nhd_ct_hoa_don')->insert([
            'nhdHoaDonID'=>3,
            'nhdSanPhamID'=>5,
            'nhdSoLuongMua'=>5,
            'nhdDonGiaMua'=>590000,
            'nhdThanhTien'=>590000 *  5,
            'nhdTrangThai'=>0,
        ]);

        DB::table('nhd_ct_hoa_don')->insert([
            'nhdHoaDonID'=>4,
            'nhdSanPhamID'=>8,
            'nhdSoLuongMua'=>3,
            'nhdDonGiaMua'=>199000,
            'nhdThanhTien'=>199000 * 3,
            'nhdTrangThai'=>0,
        ]);
    }
}