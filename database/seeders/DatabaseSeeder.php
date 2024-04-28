<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Panggil seeder untuk jenis kendaraan (Type)
        $this->call(TypeSeeder::class);

        // Panggil seeder untuk kategori kendaraan (Category)
        $this->call(CategorySeeder::class);

        // Panggil seeder untuk merek kendaraan (Brand)
        $this->call(BrandSeeder::class);

        // Panggil seeder untuk pengguna (User)
        $this->call(UserSeeder::class);

        // Panggil seeder untuk kendaraan (Vehicle)
        $this->call(VehicleSeeder::class);
    }
}
