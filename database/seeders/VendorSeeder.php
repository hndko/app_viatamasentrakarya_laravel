<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_vendor')->insert([
            'vendor_id' => 1,
            'perusahaan_id' => 1,
            'no_invoice' => '2141231gk',
            'harga' => 1500000,
            'ppn' => 165000,
            'pph_21' => 30000,
            'bukti_potong' => null,
            'created_at' => Carbon::parse('2024-03-12 08:04:10'),
            'updated_at' => Carbon::parse('2024-03-12 08:05:33'),
        ]);
    }
}
