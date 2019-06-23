<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FasilitasPrasarana extends Model
{
    protected $table = 'fasilitas_prasarana';

    protected $fillable = [
        'jenis_fasilitas_prasarana', 'keterangan_fasilitas_prasarana'
    ];
}
