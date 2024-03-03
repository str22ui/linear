<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPerumahanToKonsumensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('konsumens', function (Blueprint $table) {
            $table->string('perumahan')->nullable(); // Kolom baru
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
            $table->dropColumn('perumahan'); // Rollback untuk kolom
        });
    }
}
