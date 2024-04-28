<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create(['name' => 'City Car']);
        Category::create(['name' => 'Family Car']);
        Category::create(['name' => 'Luxury Car']);
        // Tambahkan kategori kendaraan lainnya jika diperlukan
    }
}
