<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('users')->insert([
            'nama_depan' => 'Dika',
            'nama_belakang' => 'Saputra',
            'nomor_hp' => '0812357899',
            'email' => 'admin123@gmail.com',
            'password' => \Hash::make('12345678'), 
            'bukti_pembayaran' => 'bukti_pembayaran.png',
            'role' => 'admin',
            'status' => 'aktif',
        ]);
        
    }
}