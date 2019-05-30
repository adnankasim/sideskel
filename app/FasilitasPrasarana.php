<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FasilitasPrasarana extends Model
{
    protected $table = 'fasilitas_prasarana';

    public $timestamps = false;

    protected $fillable = [
        'jenis_fasilitas_prasarana', 'keterangan_fasilitas_prasarana'
    ];
}
