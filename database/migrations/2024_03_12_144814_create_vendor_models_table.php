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
        Schema::create('tb_vendor', function (Blueprint $table) {
            $table->id('vendor_id');
            $table->unsignedBigInteger('perusahaan_id');
            $table->foreign('perusahaan_id')->references('perusahaan_id')->on('tb_perusahaan')->onDelete('cascade');
            $table->text('no_invoice');
            $table->bigInteger('harga')->nullable();
            $table->bigInteger('ppn')->nullable();
            $table->bigInteger('pph_21');
            $table->string('bukti_potong', 159)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_vendor');
    }
};
