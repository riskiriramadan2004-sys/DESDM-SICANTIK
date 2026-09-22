<?php

namespace Database\Seeders;

use App\Models\BidangLayanan;
use Illuminate\Database\Seeder;

class BidangLayananSeeder extends Seeder
{
    public function run(): void
    {
        BidangLayanan::create([
            'nama' => 'Geologi',
            'deskripsi' => 'Layanan pada bidang Geologi.',
            'status' => true,
        ]);

        BidangLayanan::create([
            'nama' => 'Ketenagalistrikan',
            'deskripsi' => 'Layanan pada bidang Ketenagalistrikan.',
            'status' => true,
        ]);

        BidangLayanan::create([
            'nama' => 'EBT',
            'deskripsi' => 'Layanan pada bidang Energi Baru dan Terbarukan.',
            'status' => true,
        ]);

        BidangLayanan::create([
            'nama' => 'Minerba',
            'deskripsi' => 'Layanan pada bidang Mineral dan Batubara.',
            'status' => true,
        ]);

        BidangLayanan::create([
            'nama' => 'UPT LAB',
            'deskripsi' => 'Layanan pada UPT Laboratorium.',
            'status' => true,
        ]);
    }
}