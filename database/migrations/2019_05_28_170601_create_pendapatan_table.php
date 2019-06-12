<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendapatanTable extends Migration
{
    public function up()
    {
        Schema::create('pendapatan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uraian_pendapatan', 300);
            $table->string('nominal_pendapatan', 300);
            $table->string('tahun', 4);
        });
    }

    public function down()
    {
        Schema::dropIfExists('pendapatan');
    }
}
