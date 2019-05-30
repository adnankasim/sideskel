<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKegiatanTable extends Migration
{
    public function up()
    {
        Schema::create('kegiatan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul_kegiatan', 200);
            $table->string('slug_kegiatan', 200);
            $table->dateTime('waktu_kegiatan');
            $table->text('deskripsi_kegiatan');
            $table->string('poster_kegiatan', 100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kegiatan');
    }
}
