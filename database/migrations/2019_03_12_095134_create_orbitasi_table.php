<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrbitasiTable extends Migration
{
    public function up()
    {
        Schema::create('orbitasi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jarak_ke_kecamatan', '30');
            $table->string('lama_tempuh_ke_kecamatan', '30');
            $table->string('jarak_ke_kabupaten', '30');
            $table->string('lama_tempuh_ke_kabupaten', '30');
            $table->string('jarak_ke_kota', '30');
            $table->string('lama_tempuh_ke_kota', '30');
        });
    }

    public function down()
    {
        Schema::dropIfExists('orbitasi');
    }
}
