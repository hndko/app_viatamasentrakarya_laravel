<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class KasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_kas')->insert([
            'kas_id' => 1,
            'tanggal' => Carbon::parse('2024-03-14'),
            'keterangan' => 'kas masuk',
            'harga' => 150000,
            'qty' => 3,
            'total' => 450000,
            'created_at' => Carbon::parse('2024-03-13 23:31:03'),
            'updated_at' => Carbon::parse('2024-03-13 23:31:38'),
        ]);
    }
}
