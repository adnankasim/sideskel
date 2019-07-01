<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnggotaLembaga extends Model
{
    protected $table = 'anggota_lembaga';

    protected $fillable = ['nama', 'jabatan', 'foto', 'id_lembaga'];

    // Relasi N-1 dengan anggota
    public function lembaga(){
        return $this->belongsTo('App\Lembaga', 'id_lembaga');
    }
}
