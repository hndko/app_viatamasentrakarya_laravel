<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PercenPajakModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PercenPajakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create a default entry for PPN 11% and PPh 2%
        PercenPajakModel::create([
            'ppn' => 11,
            'pph' => 2,
        ]);
    }
}
