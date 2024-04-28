<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TypeSeeder extends Seeder
{
    public function run()
    {
        Type::create(['name' => 'Sedan']);
        Type::create(['name' => 'SUV']);
        Type::create(['name' => 'Hatchback']);
        // Tambahkan jenis kendaraan lainnya jika diperlukan
    }
}
