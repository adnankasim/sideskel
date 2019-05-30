<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIklimTable extends Migration
{
    public function up()
    {
        Schema::create('iklim', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uraian_iklim', 100);
            $table->string('keterangan_iklim', 100);
        });
    }

    public function down()
    {
        Schema::dropIfExists('iklim');
    }
}
