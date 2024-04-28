<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BrandSeeder extends Seeder
{
    public function run()
    {
        Brand::create(['name' => 'Toyota']);
        Brand::create(['name' => 'Honda']);
        Brand::create(['name' => 'BMW']);
        // Tambahkan merek kendaraan lainnya jika diperlukan
    }
}
