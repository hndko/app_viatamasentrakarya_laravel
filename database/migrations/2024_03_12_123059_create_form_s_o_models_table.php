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
        Schema::create('tb_form_so', function (Blueprint $table) {
            $table->id('form_so_id');
            $table->unsignedBigInteger('perusahaan_id');
            $table->foreign('perusahaan_id')->references('perusahaan_id')->on('tb_perusahaan');
            $table->text('no_invoice')->nullable();
            $table->bigInteger('harga')->nullable();
            $table->bigInteger('ppn')->nullable();
            $table->bigInteger('pph_final')->nullable();
            $table->date('awal_sewa')->nullable();
            $table->date('akhir_sewa')->nullable();
            $table->date('tanggal_pembayaran')->nullable();
            $table->string('bukti_pembayaran', 150);
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_form_so');
    }
};
