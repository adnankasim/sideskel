<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFasilitasPemukimanTable extends Migration
{
    public function up()
    {
        Schema::create('fasilitas_pemukiman', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uraian_fasilitas_pemukiman', 100);
            $table->string('jumlah_fasilitas_pemukiman', 50);
            $table->string('pengguna_fasilitas_pemukiman', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fasilitas_pemukiman');
    }
}
