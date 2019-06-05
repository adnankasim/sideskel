<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBatasTable extends Migration
{
    public function up()
    {
        Schema::create('batas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mata_angin', 300);
            $table->string('uraian', 300);
        });
    }

    public function down()
    {
        Schema::dropIfExists('batas');
    }
}
