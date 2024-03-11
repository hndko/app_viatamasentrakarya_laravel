<?php

namespace Database\Seeders;

use App\Models\PerusahaanModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PerusahaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PerusahaanModel::create([
            'nama_perusahaan' => 'PT. Melia Optimus Indonesia',
            'npwp_perusahaan' => '12321312',
            'nama_pic' => 'Hendry',
            'jabatan' => 'Direktur',
            'no_pic' => '088809823755',
        ]);

        PerusahaanModel::create([
            'nama_perusahaan' => 'PT. Inovasi Sehat Nusantara',
            'npwp_perusahaan' => '98721981298',
            'nama_pic' => 'Handy',
            'jabatan' => 'Direktur',
            'no_pic' => '021767832',
        ]);
    }
}
