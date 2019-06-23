<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFasilitasEkonomiTable extends Migration
{
    public function up()
    {
        Schema::create('fasilitas_ekonomi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jenis_fasilitas_ekonomi', 100);
            $table->string('keterangan_fasilitas_ekonomi', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fasilitas_ekonomi');
    }
}
