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
        Schema::create('tb_form_vo', function (Blueprint $table) {
            $table->unsignedBigInteger('perusahaan_id');
            $table->text('no_invoice')->nullable();
            $table->unsignedBigInteger('layanan_id');
            $table->bigInteger('tahun')->default(1);
            $table->bigInteger('harga');
            $table->bigInteger('ppn');
            $table->bigInteger('pph_23');
            $table->date('awal_sewa');
            $table->date('akhir_sewa');
            $table->date('tgl_pembayaran')->nullable();
            $table->string('metode_pembayaran', 50)->nullable();
            $table->string('bukti_pembayaran', 155)->nullable();
            $table->string('bupot', 70)->nullable();
            $table->text('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_form_vo');
    }
};
