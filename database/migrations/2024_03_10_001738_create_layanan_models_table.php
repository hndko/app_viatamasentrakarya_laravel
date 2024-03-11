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
        Schema::create('tb_layanan', function (Blueprint $table) {
            $table->id('layanan_id');
            $table->string('tipe', 100);
            $table->string('judul', 150);
            $table->string('harga', 30);
            $table->enum('is_harga', ['1', '0'])->default('1');
            $table->enum('is_whatsapp', ['1', '0'])->default('1');
            $table->string('is_color', 30);
            $table->enum('is_active', ['0', '1'])->default('1');
            $table->timestamps(); // Created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_layanan');
    }
};
