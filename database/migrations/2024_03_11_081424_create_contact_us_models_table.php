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
        Schema::create('tb_contact_us', function (Blueprint $table) {
            $table->increments('contact_id');
            $table->string('nama_lengkap', 150);
            $table->string('email', 150);
            $table->string('subject', 120);
            $table->text('message');
            $table->timestamps(); // Tambahkan kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_contact_us');
    }
};
