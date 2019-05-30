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
            $table->string('utara', 200);
            $table->string('selatan', 200);
            $table->string('barat', 200);
            $table->string('timur', 200);
        });
    }

    public function down()
    {
        Schema::dropIfExists('batas');
    }
}
