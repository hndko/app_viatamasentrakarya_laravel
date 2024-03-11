<?php

namespace Database\Seeders;

use App\Models\LayananModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LayananModel::create([
            'tipe' => 'Virtual Office',
            'judul' => 'Virtual Office StartupPlans',
            'harga' => '3488000',
            'is_harga' => true,
            'is_whatsapp' => true,
            'is_color' => 'featured-teal',
            'is_active' => true,
        ]);

        LayananModel::create([
            'tipe' => 'Virtual Office',
            'judul' => 'Virtual Office CEOPlans',
            'harga' => '4578000',
            'is_harga' => true,
            'is_whatsapp' => true,
            'is_color' => 'featured',
            'is_active' => true,
        ]);

        LayananModel::create([
            'tipe' => 'Virtual Office',
            'judul' => 'Virtual Office SultanPlans',
            'harga' => '4905000',
            'is_harga' => true,
            'is_whatsapp' => true,
            'is_color' => 'featured-red',
            'is_active' => true,
        ]);
    }
}
