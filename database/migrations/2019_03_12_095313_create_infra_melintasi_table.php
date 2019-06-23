<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfraMelintasiTable extends Migration
{
    public function up()
    {
        Schema::create('infra_melintasi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uraian_infra_melintasi', 100);
            $table->string('panjang_infra_melintasi', 50);
            $table->string('lebar_infra_melintasi', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('infra_melintasi');
    }
}
