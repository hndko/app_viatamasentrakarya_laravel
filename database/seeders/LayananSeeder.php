<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_layanan')->insert([
            [
                'layanan_id' => 1,
                'tipe' => 'Virtual Office',
                'judul' => 'Virtual Office StartupPlans',
                'harga' => 3488000,
                'is_harga' => '1',
                'is_whatsapp' => '1',
                'is_color' => 'featured-teal',
                'is_active' => '1',
                'created_at' => Carbon::parse('2024-03-10 20:27:14'),
                'updated_at' => Carbon::parse('2024-03-11 21:22:31'),
            ],
            [
                'layanan_id' => 2,
                'tipe' => 'Virtual Office',
                'judul' => 'Virtual Office CEOPlans',
                'harga' => 4578000,
                'is_harga' => '1',
                'is_whatsapp' => '1',
                'is_color' => 'featured',
                'is_active' => '1',
                'created_at' => Carbon::parse('2024-03-10 20:27:14'),
                'updated_at' => Carbon::parse('2024-03-10 20:27:14'),
            ],
            [
                'layanan_id' => 3,
                'tipe' => 'Virtual Office',
                'judul' => 'Virtual Office SultanPlans',
                'harga' => 4905000,
                'is_harga' => '1',
                'is_whatsapp' => '1',
                'is_color' => 'featured-red',
                'is_active' => '1',
                'created_at' => Carbon::parse('2024-03-10 20:27:14'),
                'updated_at' => Carbon::parse('2024-03-10 20:27:14'),
            ],
            [
                'layanan_id' => 5,
                'tipe' => 'Pendirian Perusahaan',
                'judul' => 'PT Perorangan + Izin',
                'harga' => 2500000,
                'is_harga' => '1',
                'is_whatsapp' => '1',
                'is_color' => 'featured-teal',
                'is_active' => '1',
                'created_at' => Carbon::parse('2024-03-11 23:07:15'),
                'updated_at' => Carbon::parse('2024-03-22 06:40:35'),
            ],
            [
                'layanan_id' => 6,
                'tipe' => 'Pendirian Perusahaan',
                'judul' => 'PT Perorangan + Izin + VO',
                'harga' => 5988000,
                'is_harga' => '1',
                'is_whatsapp' => '1',
                'is_color' => 'featured',
                'is_active' => '1',
                'created_at' => Carbon::parse('2024-03-11 23:07:37'),
                'updated_at' => Carbon::parse('2024-03-11 23:07:37'),
            ],
            [
                'layanan_id' => 7,
                'tipe' => 'Pendirian Perusahaan',
                'judul' => 'PT + Izin',
                'harga' => 5000000,
                'is_harga' => '1',
                'is_whatsapp' => '1',
                'is_color' => 'featured-red',
                'is_active' => '1',
                'created_at' => Carbon::parse('2024-03-11 23:07:56'),
                'updated_at' => Carbon::parse('2024-03-11 23:07:56'),
            ],
            [
                'layanan_id' => 8,
                'tipe' => 'Pendirian Perusahaan',
                'judul' => 'PT + Izin + VO',
                'harga' => 8488000,
                'is_harga' => '1',
                'is_whatsapp' => '1',
                'is_color' => 'featured-teal',
                'is_active' => '1',
                'created_at' => Carbon::parse('2024-03-11 23:08:16'),
                'updated_at' => Carbon::parse('2024-03-11 23:08:16'),
            ],
            [
                'layanan_id' => 9,
                'tipe' => 'Pendirian Perusahaan',
                'judul' => 'CV + Izin',
                'harga' => 3500000,
                'is_harga' => '1',
                'is_whatsapp' => '1',
                'is_color' => 'featured',
                'is_active' => '1',
                'created_at' => Carbon::parse('2024-03-11 23:08:31'),
                'updated_at' => Carbon::parse('2024-03-11 23:08:31'),
            ],
            [
                'layanan_id' => 10,
                'tipe' => 'Pendirian Perusahaan',
                'judul' => 'CV + Izin + VO',
                'harga' => 5770000,
                'is_harga' => '1',
                'is_whatsapp' => '1',
                'is_color' => 'featured-red',
                'is_active' => '1',
                'created_at' => Carbon::parse('2024-03-11 23:08:54'),
                'updated_at' => Carbon::parse('2024-03-11 23:08:54'),
            ],
            [
                'layanan_id' => 11,
                'tipe' => 'Pendirian Perusahaan',
                'judul' => 'PT Perorangan + Izin + Website',
                'harga' => 0,
                'is_harga' => '0',
                'is_whatsapp' => '0',
                'is_color' => 'featured-teal',
                'is_active' => '1',
                'created_at' => Carbon::parse('2024-03-11 23:09:35'),
                'updated_at' => Carbon::parse('2024-03-11 23:20:17'),
            ],
            [
                'layanan_id' => 12,
                'tipe' => 'Pendirian Perusahaan',
                'judul' => 'PT + Izin + Website',
                'harga' => 0,
                'is_harga' => '0',
                'is_whatsapp' => '0',
                'is_color' => 'featured',
                'is_active' => '1',
                'created_at' => Carbon::parse('2024-03-11 23:09:45'),
                'updated_at' => Carbon::parse('2024-03-11 23:20:14'),
            ],
            [
                'layanan_id' => 13,
                'tipe' => 'Pendirian Perusahaan',
                'judul' => 'CV + Izin + Website',
                'harga' => 0,
                'is_harga' => '0',
                'is_whatsapp' => '0',
                'is_color' => 'featured-red',
                'is_active' => '1',
                'created_at' => Carbon::parse('2024-03-11 23:09:58'),
                'updated_at' => Carbon::parse('2024-03-11 23:20:10'),
            ],
        ]);
    }
}
