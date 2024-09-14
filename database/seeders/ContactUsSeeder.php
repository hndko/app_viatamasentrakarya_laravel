<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ContactUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_contact_us')->insert([
            'contact_id' => 2,
            'nama_lengkap' => 'Zakia Yunia',
            'email' => 'zakiayunia@gmail.com',
            'subject' => 'help meee pleasee',
            'message' => 'hello admin please help me',
            'created_at' => Carbon::parse('2024-03-11 01:31:25'),
            'updated_at' => Carbon::parse('2024-03-11 01:31:25'),
        ]);
    }
}
