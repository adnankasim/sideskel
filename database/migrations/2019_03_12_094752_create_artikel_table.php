<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtikelTable extends Migration
{
    public function up()
    {
        Schema::create('artikel', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul_artikel', 200);
            $table->string('slug_artikel', 200);
            $table->text('isi_artikel');
            $table->string('gambar_artikel', 100);
            $table->dateTime('waktu_artikel')->useCurrent();

            // foreign key
            $table->integer('id_pengguna')->unsigned();
        });
    }

    public function down()
    {
        Schema::dropIfExists('artikel');
    }
}
