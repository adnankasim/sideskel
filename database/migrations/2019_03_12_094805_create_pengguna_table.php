<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenggunaTable extends Migration
{
    public function up()
    {
        Schema::create('pengguna', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_pengguna', 100);
            $table->string('email_pengguna', 100);
            $table->string('password_pengguna', 100);
            $table->enum('jenis_kelamin', ['perempuan', 'laki-laki']);
            $table->string('no_hp', 15);
            $table->string('foto_pengguna', 100);
            $table->timestamps();
        });

        // Set Foreign Key
        Schema::table('artikel', function(Blueprint $table){
            $table->foreign('id_pengguna')->references('id')->on('pengguna')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pengguna');
    }
}
