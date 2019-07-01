<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLembagaTable extends Migration
{
    public function up()
    {
        Schema::create('lembaga', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 300);
            $table->text('deskripsi');
            $table->string('logo', 100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lembaga');
    }
}
