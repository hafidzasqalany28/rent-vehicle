<?php

namespace Database\Seeders;

use App\Models\Type;
use App\Models\Brand;
use App\Models\Vehicle;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VehicleSeeder extends Seeder
{
    public function run()
    {
        $sedan = Type::where('name', 'Sedan')->first();
        $cityCar = Category::where('name', 'City Car')->first();
        $toyota = Brand::where('name', 'Toyota')->first();

        Vehicle::create([
            'model_id' => $sedan->id,
            'category_id' => $cityCar->id,
            'brand_id' => $toyota->id,
            'year' => 2020,
            'rental_rate' => 100.00,
            'availability' => 'Available',
            'mileage' => 5000,
            'doors' => 4,
            'seats' => 5,
        ]);

        // Tambahkan lebih banyak data kendaraan jika diperlukan
    }
}
