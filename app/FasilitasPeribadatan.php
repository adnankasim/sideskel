<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FasilitasPeribadatan extends Model
{
    protected $table = 'fasilitas_peribadatan';

    public $timestamps = false;

    protected $fillable = [
        'jenis_fasilitas_peribadatan', 'keterangan_fasilitas_peribadatan'
    ];
}
