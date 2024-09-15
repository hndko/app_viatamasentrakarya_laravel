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
        Schema::create('tb_percenpajak', function (Blueprint $table) {
            $table->id('percenpajak_id'); // Auto-incrementing ID
            $table->integer('ppn')->default(11); // PPN default 11%
            $table->integer('pph')->default(2); // PPh default 2%
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_percenpajak');
    }
};
