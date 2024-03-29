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
        Schema::create('cashkprs', function (Blueprint $table) {
            $table->id();
            $table->integer('id_transaksi');
            $table->string('nama_bank');
            $table->integer('jumlah_pinjaman');
            $table->float('suku_bunga');
            $table->integer('tenor');
            $table->integer('angsuran_bulanan');
            $table->integer('total_angsuran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cashkprs');
    }
};
