<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            nhd_quan_triTableSeeder::class,
            nhd_loai_san_phamTableSeeder::class,
            nhd_san_phamTableSeeder::class,
            nhd_khach_hangTableSeeder::class,
            nhd_hoa_donTableSeeder::class,
            nhd_ct_hoa_donTableSeeder::class
        ]);
    }
}
