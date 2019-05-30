<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDokumenTable extends Migration
{
    public function up()
    {
        Schema::create('dokumen', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_dokumen', 300);
            $table->string('file_dokumen', 300);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dokumen');
    }
}
