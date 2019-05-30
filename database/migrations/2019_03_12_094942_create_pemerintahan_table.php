<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemerintahanTable extends Migration
{
    public function up()
    {
        Schema::create('pemerintahan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_pemerintahan', 200);
            $table->string('jabatan_pemerintahan', 100);
            $table->string('masa_bakti_pemerintahan', 30);
        });
    }

    public function down()
    {
        Schema::dropIfExists('pemerintahan');
    }
}
