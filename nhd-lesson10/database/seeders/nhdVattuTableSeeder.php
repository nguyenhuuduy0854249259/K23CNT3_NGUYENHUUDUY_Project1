<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class nhdVattuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('nhdvattu')->insert([
            'nhdMaVTu'=>'DD01',
            'nhdTenVTu'=>'Đầu DVD Hitachi 1 cửa',
            'nhdDvTinh'=>'Bộ',
            'nhdPhanTram'=>40,
            'email' => 'example1@gmail.com',
            ]);
        DB::table('nhdvattu')->insert([
            'nhdMaVTu'=>'DD02',
            'nhdTenVTu'=>'Đầu DVD Hitachi 2 cửa',
            'nhdDvTinh'=>'Bộ',
            'nhdPhanTram'=>50,
            'email' => 'example2@gmail.com',
            ]);    
    }
}
