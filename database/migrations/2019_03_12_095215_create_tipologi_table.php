<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipologiTable extends Migration
{
    public function up()
    {
        Schema::create('tipologi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uraian_tipologi', 100);
            $table->enum('keterangan_tipologi', ['ya', 'tidak']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('tipologi');
    }
}
