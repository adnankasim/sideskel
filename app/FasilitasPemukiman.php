<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FasilitasPemukiman extends Model
{
    protected $table = 'fasilitas_pemukiman';

    public $timestamps = false;

    protected $fillable = [
        'uraian_fasilitas_pemukiman', 
        'jumlah_fasilitas_pemukiman', 
        'pengguna_fasilitas_pemukiman'
    ];
}
