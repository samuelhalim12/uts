<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObat160419077Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obat160419077', function (Blueprint $table) {
            $table->id();
            $table->string('nama_obat');
            $table->integer('stok');
            $table->integer('harga');
            $table->unsignedBigInteger('kategori_obat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('obat160419077');
    }
}
