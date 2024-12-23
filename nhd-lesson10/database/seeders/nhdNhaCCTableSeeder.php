<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class nhdMaNCCTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();
        foreach(range(1,100) as $index){
            DB::table('nhdnhacc')->insert([
                'nhdMaNCC'=>$faker->uuid(),
                // 'MaNCC'=>$faker->word(15),
                'nhdTenNCC'=>$faker->sentence(5),
                'nhdDiachi'=>$faker->address(),
                'nhdDienthoai'=>$faker->phoneNumber(10),
                'nhdemail'=>$faker->email(),
                'nhdstatus'=>$faker->boolean()
                ]);
        }
    }
}
