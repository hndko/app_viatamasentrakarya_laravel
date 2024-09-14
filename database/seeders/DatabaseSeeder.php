<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Seeders\KasSeeder;
use Database\Seeders\SnkSeeder;
use Illuminate\Database\Seeder;
use Database\Seeders\HrgaSeeder;
use Database\Seeders\KbliSeeder;
use Database\Seeders\AboutSeeder;
use Database\Seeders\ClientSeeder;
use Database\Seeders\FormSoSeeder;
use Database\Seeders\FormVoSeeder;
use Database\Seeders\VendorSeeder;
use Database\Seeders\GallerySeeder;
use Database\Seeders\LayananSeeder;
use Database\Seeders\ContactUsSeeder;
use Database\Seeders\PerusahaanSeeder;
use Database\Seeders\UsersTableSeeder;
use Database\Seeders\SpaceOfficeSeeder;
use Database\Seeders\DeskripsiLayananSeeder;
use Database\Seeders\PendirianPerusahaanSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AboutSeeder::class,
            ClientSeeder::class,
            ContactUsSeeder::class,
            LayananSeeder::class,
            DeskripsiLayananSeeder::class,
            PerusahaanSeeder::class,
            FormSoSeeder::class,
            FormVoSeeder::class,
            GallerySeeder::class,
            HrgaSeeder::class,
            KasSeeder::class,
            KbliSeeder::class,
            PendirianPerusahaanSeeder::class,
            SnkSeeder::class,
            SpaceOfficeSeeder::class,
            VendorSeeder::class,
            UsersTableSeeder::class
        ]);
    }
}
