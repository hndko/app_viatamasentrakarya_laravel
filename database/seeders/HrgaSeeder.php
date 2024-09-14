<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HrgaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_hrga')->insert([
            'hrga_id' => 1,
            'perusahaan_id' => 1,
            'nama_anggota' => 'Budi Santoso',
            'tanggal_masuk' => Carbon::parse('2024-03-14'),
            'no_telpon' => '08123456789',
            'jabatan' => 'Manager',
            'no_pegawai' => 'EMP001',
            'nik' => '3172012345678901',
            'tanggal_lahir' => Carbon::parse('1985-05-20'),
            'lokasi' => 'Jakarta',
            'bpjs_kesehatan' => 'BPJS123456',
            'bpjs_tk' => 'BPJSTK123456',
            'pkwt_awal' => Carbon::parse('2024-03-14'),
            'pkwt_akhir' => Carbon::parse('2025-03-14'),
            'kasbon' => 150000,
            'slip_gaji' => '1710393594.jpg',
            'is_archive' => "0",
            'created_at' => Carbon::parse('2024-03-13 21:53:00'),
            'updated_at' => Carbon::parse('2024-03-13 22:20:05'),
        ]);
    }
}
