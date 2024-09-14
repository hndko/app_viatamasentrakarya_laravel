<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class KbliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_kbli')->insert([
            'kbli_id' => 1,
            'sampul' => '1710144531.jpg',
            'judul' => 'Panduan KBLI Terbaru',
            'deskripsi' => '<p class="card-text">Untuk mempermudah pelaku usaha menentukan kategori Bidang Usaha yang akan dikembangkan di Indonesia, pemerintah melalui Badan Pusat Statistik (BPS) menyusun Klasifikasi Baku Lapangan Usaha Indonesia (KBLI) sebagai panduan penentuan jenis kegiatan usaha/bisnis. Acuan ini diperbarui pada September 2020 sesuai dengan Peraturan BPS Nomor 2 Tahun 2020 tentang Klasifikasi Baku Lapangan Usaha Indonesia, dengan penambahan 216 kode KBLI 5 digit dari KBLI 2017, sehingga total saat ini ada 1.790 kode KBLI.</p>
                          <p class="card-text">KBLI adalah pengklasifikasian aktivitas/kegiatan ekonomi Indonesia yang menghasilkan produk/output, baik berupa barang maupun jasa, berdasarkan lapangan usaha untuk memberikan keseragaman konsep, definisi, dan klasifikasi lapangan usaha dalam perkembangan dan pergeseran kegiatan ekonomi di Indonesia.</p>',
            'file_uploaded' => '1710177590.pdf',
            'created_at' => Carbon::parse('2024-03-11 10:19:50'),
            'updated_at' => Carbon::parse('2024-03-11 10:19:50'),
        ]);
    }
}
