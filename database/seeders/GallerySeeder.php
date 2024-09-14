<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_gallery')->insert([
            [
                'gallery_id' => 1,
                'sampul' => '1710141372.jpg',
                'created_at' => Carbon::parse('2024-03-11 00:16:12'),
                'updated_at' => Carbon::parse('2024-03-11 00:16:12'),
            ],
            [
                'gallery_id' => 2,
                'sampul' => '1710141386.jpg',
                'created_at' => Carbon::parse('2024-03-11 00:16:26'),
                'updated_at' => Carbon::parse('2024-03-11 00:16:26'),
            ],
            [
                'gallery_id' => 3,
                'sampul' => '1710141392.jpg',
                'created_at' => Carbon::parse('2024-03-11 00:16:32'),
                'updated_at' => Carbon::parse('2024-03-11 00:16:32'),
            ],
            [
                'gallery_id' => 4,
                'sampul' => '1710141400.jpg',
                'created_at' => Carbon::parse('2024-03-11 00:16:40'),
                'updated_at' => Carbon::parse('2024-03-11 00:16:40'),
            ],
            [
                'gallery_id' => 5,
                'sampul' => '1710141408.jpg',
                'created_at' => Carbon::parse('2024-03-11 00:16:48'),
                'updated_at' => Carbon::parse('2024-03-11 00:16:48'),
            ],
            [
                'gallery_id' => 6,
                'sampul' => '1710141414.jpg',
                'created_at' => Carbon::parse('2024-03-11 00:16:54'),
                'updated_at' => Carbon::parse('2024-03-11 00:16:54'),
            ],
            [
                'gallery_id' => 7,
                'sampul' => '1710141420.jpg',
                'created_at' => Carbon::parse('2024-03-11 00:17:00'),
                'updated_at' => Carbon::parse('2024-03-11 00:17:00'),
            ],
        ]);
    }
}
