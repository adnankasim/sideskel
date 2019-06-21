<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelayananTable extends Migration
{
    public function up()
    {
        Schema::create('pelayanan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 300);
            $table->text('keterangan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pelayanan');
    }
}
