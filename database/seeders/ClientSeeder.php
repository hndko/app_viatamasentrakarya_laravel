<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_client')->insert([
            [
                'client_id' => 2,
                'nama_klien' => 'Universitas BSI',
                'sampul' => '1710137862.png',
                'created_at' => Carbon::parse('2024-03-10 20:54:18'),
                'updated_at' => Carbon::parse('2024-03-10 23:17:58'),
            ],
            [
                'client_id' => 3,
                'nama_klien' => 'GARASI DRIFT',
                'sampul' => '1710129322.png',
                'created_at' => Carbon::parse('2024-03-10 20:55:22'),
                'updated_at' => Carbon::parse('2024-03-10 20:55:22'),
            ],
            [
                'client_id' => 4,
                'nama_klien' => 'INTEN',
                'sampul' => '1710129331.png',
                'created_at' => Carbon::parse('2024-03-10 20:55:31'),
                'updated_at' => Carbon::parse('2024-03-10 20:55:31'),
            ],
            [
                'client_id' => 5,
                'nama_klien' => 'SMKL',
                'sampul' => '1710129340.png',
                'created_at' => Carbon::parse('2024-03-10 20:55:40'),
                'updated_at' => Carbon::parse('2024-03-10 20:55:40'),
            ],
        ]);
    }
}
