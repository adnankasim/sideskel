<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilTable extends Migration
{
    public function up()
    {
        Schema::create('profil', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nama', 200);
            $table->text('alamat', 300);
            $table->text('telepon', 15);
            $table->text('email', 100);
            $table->text('deskripsi');
            $table->text('logo', 100);
            $table->text('visi_misi');
        });
    }

    public function down()
    {
        Schema::dropIfExists('profil');
    }
}
