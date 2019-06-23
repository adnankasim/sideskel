<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFasilitasPemerintahanTable extends Migration
{
    public function up()
    {
        Schema::create('fasilitas_pemerintahan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jenis_fasilitas_pemerintahan', 100);
            $table->string('keterangan_fasilitas_pemerintahan', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fasilitas_pemerintahan');
    }
}
