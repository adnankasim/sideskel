<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendudukTable extends Migration
{
    public function up()
    {
        Schema::create('penduduk', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nik', '20');
            $table->string('no_kk', '20');
            $table->string('nama_penduduk', 255);
            $table->string('alamat_penduduk', 255);
            $table->string('status_menikah', 30);
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->string('tempat_lahir', 255);
            $table->date('tanggal_lahir');
            $table->string('foto_penduduk', 100)->default('default.jpg');
            $table->string('pekerjaan', 200);
            $table->string('agama', 100);
            $table->string('pendidikan_terakhir', 100);
            $table->enum('golongan_darah', ['o', 'a', 'b', 'ab', 'tidak diketahui'])->nullable();
            $table->string('lingkungan', 3);
            $table->string('rt', 3);
            $table->string('rw', 3);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('penduduk');
    }
}
