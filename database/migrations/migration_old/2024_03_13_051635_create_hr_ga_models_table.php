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
        Schema::create('tb_hrga', function (Blueprint $table) {
            $table->id('hrga_id');
            $table->unsignedBigInteger('perusahaan_id');
            $table->foreign('perusahaan_id')->references('perusahaan_id')->on('tb_perusahaan')->onDelete('cascade');
            $table->string('nama_anggota', 155);
            $table->date('tanggal_masuk');
            $table->string('no_telpon', 20);
            $table->string('jabatan', 30);
            $table->string('no_pegawai', 50);
            $table->string('nik', 30);
            $table->date('tanggal_lahir');
            $table->text('lokasi');
            $table->string('bpjs_kesehatan', 50);
            $table->string('bpjs_tk', 50);
            $table->date('pkwt_awal');
            $table->date('pkwt_akhir');
            $table->bigInteger('kasbon')->nullable();
            $table->string('slip_gaji', 155)->nullable();
            $table->enum('is_archive', ['1', '0'])->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_hrga');
    }
};
