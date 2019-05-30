<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFasilitasPenunjangPemukimanTable extends Migration
{
    public function up()
    {
        Schema::create('fasilitas_penunjang_pemukiman', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uraian_fasilitas_penunjang_pemukiman', 100);
            $table->string('jumlah_fasilitas_penunjang_pemukiman', 50);
            $table->string('pengguna_fasilitas_penunjang_pemukiman', 50);
        });
    }

    public function down()
    {
        Schema::dropIfExists('fasilitas_penunjang_pemukiman');
    }
}
