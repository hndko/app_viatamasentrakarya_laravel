<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 2,
                'nama_lengkap' => 'admin01',
                'email' => 'admin01@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'admin 1',
                'created_at' => Carbon::parse('2024-03-14 01:04:20'),
                'updated_at' => Carbon::parse('2024-03-22 06:48:36'),
            ],
            [
                'id' => 3,
                'nama_lengkap' => 'admin02',
                'email' => 'admin02@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'admin 2',
                'created_at' => Carbon::parse('2024-03-14 01:05:33'),
                'updated_at' => Carbon::parse('2024-03-22 06:48:43'),
            ],
            [
                'id' => 4,
                'nama_lengkap' => 'admin content',
                'email' => 'admincontent@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'admin content',
                'created_at' => Carbon::parse('2024-03-14 01:05:46'),
                'updated_at' => Carbon::parse('2024-03-14 02:09:45'),
            ],
            [
                'id' => 5,
                'nama_lengkap' => 'Superadmin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'superadmin',
                'created_at' => Carbon::parse('2024-03-14 01:36:24'),
                'updated_at' => Carbon::parse('2024-03-14 01:43:21'),
            ],
        ]);
    }
}
