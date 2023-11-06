<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateForeingkeyObat160419077 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('obat160419077', function (Blueprint $table) {
            $table->foreign('kategori_obat')->references('id')->on('kategoriobat160419077');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('obat160419077', function (Blueprint $table) {
            $table->dropForeign(['kategori_obat']);
        });
    }
}
