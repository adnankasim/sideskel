<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFasilitasKesehatanTable extends Migration
{
    public function up()
    {
        Schema::create('fasilitas_kesehatan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jenis_fasilitas_kesehatan', 100);
            $table->string('keterangan_fasilitas_kesehatan', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fasilitas_kesehatan');
    }
}
