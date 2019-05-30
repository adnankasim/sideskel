<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTanamanKomoditasTable extends Migration
{
    public function up()
    {
        Schema::create('tanaman_komoditas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uraian_tanaman_komoditas', 100);
            $table->string('luas_tanaman_komoditas', 30);
            $table->string('produksi_per_ha', 30);
            $table->string('tahun_anggaran', 4);

        });
    }

    public function down()
    {
        Schema::dropIfExists('tanaman_komoditas');
    }
}
