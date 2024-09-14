<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SpaceOfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_space_office')->insert([
            'space_office_id' => 1,
            'judul' => 'Space Office Price',
            'deskripsi' => 'Ideal Bussiness Center by Viatama Sentrakarya',
            'sampul' => '1710177719.png',
            'created_at' => Carbon::parse('2024-03-11 17:05:10'),
            'updated_at' => Carbon::parse('2024-03-11 10:21:59'),
        ]);
    }
}
