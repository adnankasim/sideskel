<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKesuburanTanahTable extends Migration
{
    public function up()
    {
        Schema::create('kesuburan_tanah', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uraian_kesuburan_tanah', 100);
            $table->string('luas_ha', 30);
            $table->string('keterangan_kesuburan_tanah', 50);
        });
    }

    public function down()
    {
        Schema::dropIfExists('kesuburan_tanah');
    }
}
