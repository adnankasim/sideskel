<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBelanjaTable extends Migration
{
    public function up()
    {
        Schema::create('belanja', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uraian_belanja', 300);
            $table->string('nominal_belanja', 300);
            $table->string('tahun', 4);
        });
    }

    public function down()
    {
        Schema::dropIfExists('belanja');
    }
}
