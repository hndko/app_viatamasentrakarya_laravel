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
        Schema::create('tb_kbli', function (Blueprint $table) {
            $table->increments('kbli_id');
            $table->string('sampul', 150);
            $table->string('judul', 100);
            $table->text('deskripsi');
            $table->string('file_uploaded', 150);
            $table->timestamps(); // Kolom untuk created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_kbli');
    }
};
