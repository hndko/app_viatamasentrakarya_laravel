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
        Schema::create('tb_pendirian_perusahaan', function (Blueprint $table) {
            $table->id('pendirian_perusahaan_id');
            $table->unsignedBigInteger('perusahaan_id');
            $table->text('no_invoice');
            $table->bigInteger('harga');
            $table->string('estiminasi_pekerjaan', 50);
            $table->date('tanggal_pembayaran');
            $table->string('bukti_pembayaran', 150);
            $table->text('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pendirian_perusahaan');
    }
};
