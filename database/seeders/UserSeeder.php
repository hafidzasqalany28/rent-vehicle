<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Buat pengguna admin
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('12345678'), // Menggunakan Hash::make() untuk enkripsi password
            'role' => 'admin',
        ]);

        // Buat pengguna pelanggan
        User::create([
            'name' => 'hafidz',
            'email' => 'hafidzasqalany28@example.com',
            'password' => Hash::make('12345678'), // Menggunakan Hash::make() untuk enkripsi password
            'role' => 'customer',
        ]);

        // Tambahkan lebih banyak data pengguna jika diperlukan
    }
}
