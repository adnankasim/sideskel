<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFasilitasPeribadatanTable extends Migration
{
    public function up()
    {
        Schema::create('fasilitas_peribadatan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jenis_fasilitas_peribadatan', 100);
            $table->string('keterangan_fasilitas_peribadatan', 50);
        });
    }

    public function down()
    {
        Schema::dropIfExists('fasilitas_peribadatan');
    }
}
