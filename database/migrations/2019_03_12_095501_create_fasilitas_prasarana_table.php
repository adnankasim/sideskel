<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFasilitasPrasaranaTable extends Migration
{
    public function up()
    {
        Schema::create('fasilitas_prasarana', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jenis_fasilitas_prasarana', 100);
            $table->string('keterangan_fasilitas_prasarana', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fasilitas_prasarana');
    }
}
