<?php

namespace Database\Seeders;

use App\Models\Perusahaan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PerusahaanSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'nama_perusahaan' => 'PT Kahfi Digital Jaya',
                'bidang_usaha' => 'Software House',
                'alamat' => 'Gandasoli',
                'nama_pembimbing_industri' => 'Bahlil Saputra'
            ],
            [
                'nama_perusahaan' => 'PT Kahfi Digital Jaya',
                'bidang_usaha' => 'Software House',
                'alamat' => 'Gandasoli',
                'nama_pembimbing_industri' => 'Bahlil Saputra'
            ],
        ];

        foreach ($data as $item) {
            Perusahaan::create($item);
        }
    }
}
