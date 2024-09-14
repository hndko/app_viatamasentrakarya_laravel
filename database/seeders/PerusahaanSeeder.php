<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PerusahaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_perusahaan')->insert([
            [
                'perusahaan_id' => 1,
                'nama_perusahaan' => 'PT Melia Optimus Indonesia',
                'npwp_perusahaan' => '211312312312',
                'nama_pic' => 'Jono',
                'jabatan' => 'Direktur',
                'no_pic' => '0867282721',
                'created_at' => Carbon::parse('2024-03-12 00:34:21'),
                'updated_at' => Carbon::parse('2024-03-12 00:39:14'),
            ],
            [
                'perusahaan_id' => 2,
                'nama_perusahaan' => 'PT Karya Bakria Sarana',
                'npwp_perusahaan' => '216873162',
                'nama_pic' => 'Johan',
                'jabatan' => 'Staff',
                'no_pic' => '082638213',
                'created_at' => Carbon::parse('2024-03-12 00:39:32'),
                'updated_at' => Carbon::parse('2024-03-12 00:39:32'),
            ],
            [
                'perusahaan_id' => 3,
                'nama_perusahaan' => 'PT Artha Kreasi Utama',
                'npwp_perusahaan' => '871623872163',
                'nama_pic' => 'Bunga Ayu',
                'jabatan' => 'Direktur',
                'no_pic' => '08262173',
                'created_at' => Carbon::parse('2024-03-12 00:40:00'),
                'updated_at' => Carbon::parse('2024-03-12 00:40:00'),
            ],
        ]);
    }
}
