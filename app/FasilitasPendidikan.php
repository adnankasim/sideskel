<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FasilitasPendidikan extends Model
{
    protected $table = 'fasilitas_pendidikan';

    public $timestamps = false;

    protected $fillable = [
        'jenis_fasilitas_pendidikan', 'keterangan_fasilitas_pendidikan'
    ];
}
