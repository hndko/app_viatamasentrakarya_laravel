<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_about')->insert([
            'about_id' => 1,
            'deskripsi' => '<p class="card-text">Selamat datang di PT Viatama Sentrakarya, mitra andal Anda dalam menjalankan bisnis. Kami adalah pionir dalam industri penyedia layanan kantor virtual dan bisnis di Indonesia. Dengan pengalaman bertahun-tahun, kami telah membantu ribuan pelanggan memulai dan mengembangkan bisnis mereka dengan sukses.</p>
                            <p class="card-text">Komitmen kami adalah untuk menyediakan solusi yang tepat untuk kebutuhan bisnis Anda. Dengan keahlian dalam pendirian perusahaan, sertifikasi badan usaha, dan layanan terkait lainnya, kami siap membantu Anda mengatasi tantangan apa pun yang mungkin Anda hadapi dalam memulai atau mengembangkan bisnis Anda.</p>
                            <p class="card-text">Kami memahami bahwa setiap bisnis memiliki kebutuhan yang unik, itulah mengapa kami menawarkan berbagai paket layanan yang dapat disesuaikan dengan kebutuhan spesifik Anda. Dari pembuatan perusahaan hingga penanganan administrasi harian, tim kami yang berpengalaman siap membantu Anda melewati setiap tahap perjalanan bisnis Anda.</p>
                            <p class="card-text">Dengan PT Viatama Sentrakarya sebagai mitra Anda, Anda dapat fokus pada mengembangkan inti bisnis Anda, sementara kami mengurus detailnya. Percayakan kepada kami untuk membantu Anda mencapai kesuksesan dalam dunia bisnis yang kompetitif ini. Hubungi kami hari ini untuk mulai membangun masa depan bisnis Anda bersama PT Viatama Sentrakarya.</p>',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::parse('2024-03-10 23:51:52'),
        ]);
    }
}
