<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;


class nhdVattuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
/*        DB::table('nhdvattu')->insert([
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
*/
        
            $faker = Faker::create();
        foreach(range(1,50) as $index){
            DB::table('nhdvattu')->insert([
                'nhdMavtu'=>$faker->word(4),
                // 'MaNCC'=>$faker->word(15),
                'nhdTenvtu'=>$faker->sentence(100),
                'nhdDienthoai'=>$faker->phoneNumber(10),
                'nhdDvtinh'=>$faker->word(11),
                'nhdPhantram'=>$faker->randomFloat(2,0,100)
                ]);
        }
    }
}
