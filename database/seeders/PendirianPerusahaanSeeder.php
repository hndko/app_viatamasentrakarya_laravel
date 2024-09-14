<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PendirianPerusahaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_pendirian_perusahaan')->insert([
            'pendirian_perusahaan_id' => 1,
            'perusahaan_id' => 1,
            'no_invoice' => 'GK17212721',
            'harga' => 15000000,
            'estiminasi_pekerjaan' => '4',
            'tanggal_pembayaran' => Carbon::parse('2024-03-12'),
            'bukti_pembayaran' => '1710248494.jpg',
            'keterangan' => 'test',
            'created_at' => Carbon::parse('2024-03-12 05:18:29'),
            'updated_at' => Carbon::parse('2024-03-12 06:02:25'),
        ]);
    }
}
