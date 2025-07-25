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
        Schema::create('chi_tiet_phieu_kiem_kho', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('phieu_kiem_id');
            $table->uuid('san_pham_id');
            $table->integer('so_luong_ly_thuyet');
            $table->integer('so_luong_thuc_te');
            $table->integer('so_chenh_lech');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chi_tiet_phieu_kiem_kho');
    }
};
