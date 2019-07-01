<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnggotaLembagaTable extends Migration
{
    public function up()
    {
        Schema::create('anggota_lembaga', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 300);
            $table->string('jabatan', 300);
            $table->string('foto', 100);
            $table->timestamps();

            // foreign key
            $table->integer('id_lembaga')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anggota_lembaga');
    }
}
