<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class nhd_loai_san_phamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('nhd_loai_san_pham')->insert([
            'nhdMaLoai'=>'L001',
            'nhdTenLoai'=>'thẻ bài yugioh',
            'nhdTrangThai'=>0
        ]);
        DB::table('nhd_loai_san_pham')->insert([
            'nhdMaLoai'=>'L002',
            'nhdTenLoai'=>'thẻ bài pokemon',
            'nhdTrangThai'=>0
        ]);
    }
}