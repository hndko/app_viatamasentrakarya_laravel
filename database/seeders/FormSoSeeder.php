<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FormSoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_form_so')->insert([
            'form_so_id' => 1,
            'perusahaan_id' => 1,
            'no_invoice' => '1231231232',
            'harga' => 15000000,
            'ppn' => 1650000,
            'pph_final' => 1500000,
            'awal_sewa' => Carbon::parse('2024-03-12'),
            'akhir_sewa' => null,
            'tanggal_pembayaran' => null,
            'bukti_pembayaran' => '1710247725.jpg',
            'keterangan' => null,
            'created_at' => Carbon::parse('2024-03-12 05:48:45'),
            'updated_at' => Carbon::parse('2024-03-12 06:00:48'),
        ]);
    }
}
