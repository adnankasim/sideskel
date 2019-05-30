<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FasilitasKesehatan extends Model
{
    protected $table = 'fasilitas_kesehatan';

    public $timestamps = false;

    protected $fillable = [
        'jenis_fasilitas_kesehatan', 'keterangan_fasilitas_kesehatan'
    ];
}
