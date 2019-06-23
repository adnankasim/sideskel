<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'pengguna';

    protected $fillable = ['nama_pengguna', 'email_pengguna', 'password_pengguna', 'jenis_kelamin', 'no_hp'];

    // relasi 1-N dengan artikel
    public function artikel(){
        return $this->hasMany('App\Artikel', 'id_pengguna');
    }
}
