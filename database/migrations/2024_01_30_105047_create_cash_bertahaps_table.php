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
        Schema::create('cash_bertahaps', function (Blueprint $table) {
            $table->id();
            $table->integer('id_transaksi');
            $table->integer('jumlah_cicilan');
            $table->integer('jumlah_cicilan_bulanan');
            $table->date('tanggal_mulai');
            $table->date('tanggal_akhir');
            $table->integer('total_cicilan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cash_bertahaps');
    }
};
