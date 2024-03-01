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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->integer('id_transaksi');
            $table->string('nama_perumahan');
            $table->integer('tipe_rumah');
            $table->integer('harga');
            $table->date('tanggal_transaksi');
            $table->string('nama_konsumen');
            $table->integer('no_wa_konsumen');
            $table->string('nama_marketing');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
