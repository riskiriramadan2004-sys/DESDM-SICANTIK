<?php

namespace Database\Seeders;

use App\Models\BidangLayanan;
use App\Models\Layanan;
use Illuminate\Database\Seeder;

class LayananSeeder extends Seeder
{
    public function run(): void
    {
        $layanan = [
            'Geologi' => [
                [
                    'nomor_layanan' => 'GEO-001',
                    'nama' => 'Layanan Geologi',
                    'deskripsi' => 'Layanan pada bidang Geologi.',
                ],
            ],

            'Ketenagalistrikan' => [
                [
                    'nomor_layanan' => 'KTL-001',
                    'nama' => 'Layanan Ketenagalistrikan',
                    'deskripsi' => 'Layanan pada bidang Ketenagalistrikan.',
                ],
            ],

            'EBT' => [
                [
                    'nomor_layanan' => 'EBT-001',
                    'nama' => 'Layanan Energi Baru dan Terbarukan',
                    'deskripsi' => 'Layanan pada bidang Energi Baru dan Terbarukan.',
                ],
            ],

            'Minerba' => [
                [
                    'nomor_layanan' => 'MIN-001',
                    'nama' => 'Layanan Mineral dan Batubara',
                    'deskripsi' => 'Layanan pada bidang Mineral dan Batubara.',
                ],
            ],

            'UPT LAB' => [
                [
                    'nomor_layanan' => 'LAB-001',
                    'nama' => 'Layanan Laboratorium',
                    'deskripsi' => 'Layanan pada UPT Laboratorium.',
                ],
            ],
        ];

        foreach ($layanan as $namaBidang => $daftarLayanan) {
            $bidang = BidangLayanan::where('nama', $namaBidang)->first();

            if (!$bidang) {
                continue;
            }

            foreach ($daftarLayanan as $data) {
                Layanan::updateOrCreate(
                    [
                        'nomor_layanan' => $data['nomor_layanan'],
                    ],
                    [
                        'bidang_layanan_id' => $bidang->id,
                        'nama' => $data['nama'],
                        'deskripsi' => $data['deskripsi'],
                        'status' => true,
                    ]
                );
            }
        }
    }
}