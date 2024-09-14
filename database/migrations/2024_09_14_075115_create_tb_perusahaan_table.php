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
        Schema::create('tb_perusahaan', function (Blueprint $table) {
            $table->id('perusahaan_id');
            $table->string('nama_perusahaan', 155);
            $table->string('npwp_perusahaan', 30)->nullable();
            $table->string('nama_pic', 155)->nullable();
            $table->string('jabatan', 70)->nullable();
            $table->string('no_pic', 30)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_perusahaan');
    }
};
