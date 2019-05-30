<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFasilitasPendidikan extends Migration
{
    public function up()
    {
        Schema::create('fasilitas_pendidikan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jenis_fasilitas_pendidikan', 100);
            $table->string('keterangan_fasilitas_pendidikan', 50);
        });
    }

    public function down()
    {
        Schema::dropIfExists('fasilitas_pendidikan');
    }
}
