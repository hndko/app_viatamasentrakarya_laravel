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
        Schema::table('tb_form_vo', function (Blueprint $table) {
            // Hapus kolom user_id
            $table->dropColumn('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tb_form_vo', function (Blueprint $table) {
            // Tambahkan kembali kolom user_id
            $table->bigInteger('user_id')->default('1');
        });
    }
};
