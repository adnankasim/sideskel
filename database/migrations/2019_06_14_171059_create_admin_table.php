<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminTable extends Migration
{
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_admin', 100);
            $table->string('email_admin', 100);
            $table->string('password_admin', 100);
            $table->enum('jenis_kelamin', ['perempuan', 'laki-laki']);
            $table->string('no_hp', 15);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('admin');
    }
}
