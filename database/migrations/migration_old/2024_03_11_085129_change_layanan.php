<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::rename('tb_layanan', 'tb_layanan_vo');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::rename('tb_layanan_vo', 'tb_layanan');
    }
};
