<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lembaga extends Model
{
    protected $table = 'lembaga';

    protected $fillable = ['nama', 'deskripsi', 'logo'];

    // relasi 1-N dengan artikel
    public function anggotaLembaga(){
        return $this->hasMany('App\AnggotaLembaga', 'id_lembaga');
    }
}
