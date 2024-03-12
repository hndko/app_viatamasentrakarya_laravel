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
        Schema::create('tb_deskripsi_layanan', function (Blueprint $table) {
            $table->id('deskripsi_id');
            $table->unsignedBigInteger('layanan_id');
            $table->foreign('layanan_id')->references('layanan_id')->on('tb_layanan')->onDelete('cascade');
            $table->string('deskripsi', 150);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_deskripsi_layanan');
    }
};
