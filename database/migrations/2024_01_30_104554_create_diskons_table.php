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
        Schema::create('diskons', function (Blueprint $table) {
            $table->id();
            $table->string('nama_perumahan');
            $table->integer('diskon_harga');
            $table->integer('diskon_furniture');
            $table->integer('diskon_elektronik');
            $table->integer('diskon_fee_biaya_legalitas');
            $table->string('jenis_barang1');
            $table->string('jenis_barang2');
            $table->string('jenis_barang3');
            $table->integer('jumlah_nominal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diskons');
    }
};
