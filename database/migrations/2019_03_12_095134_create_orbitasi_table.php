<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrbitasiTable extends Migration
{
    public function up()
    {
        Schema::create('orbitasi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uraian', '300');
            $table->string('keterangan', '300');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orbitasi');
    }
}
