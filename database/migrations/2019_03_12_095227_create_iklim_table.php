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
            $table->string('uraian_iklim', 300);
            $table->string('keterangan_iklim', 300);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('iklim');
    }
}
