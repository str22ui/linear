<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNamaKantorToKonsumensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('konsumens', function (Blueprint $table) {
            $table->string('nama_kantor')->nullable(); // Kolom baru
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('konsumens', function (Blueprint $table) {
            $table->dropColumn('nama_kantor'); // Rollback untuk kolom
        });
    }
}
