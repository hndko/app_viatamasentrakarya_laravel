<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FormVoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_form_vo')->insert([
            'form_vo_id' => 1,
            'perusahaan_id' => 1,
            'no_invoice' => '123532245gb',
            'layanan_id' => 1,
            'harga' => 3488000,
            'ppn' => 383680,
            'pph_23' => 69760,
            'awal_sewa' => Carbon::parse('2024-03-12'),
            'akhir_sewa' => Carbon::parse('2025-03-12'),
            'tgl_pembayaran' => Carbon::parse('2024-03-12'),
            'metode_pembayaran' => 'TF Bank BCA',
            'bukti_pembayaran' => '1710235085.jpg',
            'bupot' => null,
            'note' => null,
            'created_at' => Carbon::parse('2024-03-12 01:54:07'),
            'updated_at' => Carbon::parse('2024-03-12 06:01:47'),
        ]);
    }
}
