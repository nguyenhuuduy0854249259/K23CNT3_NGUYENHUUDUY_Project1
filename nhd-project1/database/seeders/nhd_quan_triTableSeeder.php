<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; // Thêm dòng này

class nhd_quan_triTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Mã hóa mật khẩu bằng Hash::make()
        $nhdMatKhau = Hash::make('nguyenhuuduy1'); // Mã hóa mật khẩu

        DB::table('nhd_quan_tri')->insert([
            'nhdTaiKhoan' => 'huuduy@gmail.com',
            'nhdMatKhau' => $nhdMatKhau,
            'nhdTrangThai' => 0
        ]);

        DB::table('nhd_quan_tri')->insert([
            'nhdTaiKhoan' => '0854249259',
            'nhdMatKhau' => $nhdMatKhau,
            'nhdTrangThai' => 0
        ]);
    }
}