<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FasilitasPenunjangPemukiman extends Model
{
    protected $table = 'fasilitas_penunjang_pemukiman';

    public $timestamps = false;

    protected $fillable = [
        'uraian_fasilitas_penunjang_pemukiman', 'jumlah_fasilitas_penunjang_pemukiman', 'pengguna_fasilitas_penunjang_pemukiman'
    ];
}
