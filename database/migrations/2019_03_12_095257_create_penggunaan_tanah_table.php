<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenggunaanTanahTable extends Migration
{
    public function up()
    {
        Schema::create('penggunaan_tanah', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uraian_penggunaan_tanah', 100);
            $table->string('keterangan_penggunaan_tanah', 50);
        });
    }

    public function down()
    {
        Schema::dropIfExists('penggunaan_tanah');
    }
}
