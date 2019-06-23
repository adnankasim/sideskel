<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FasilitasPemerintahan extends Model
{
    protected $table = 'fasilitas_pemerintahan';

    protected $fillable = [
        'jenis_fasilitas_pemerintahan', 'keterangan_fasilitas_pemerintahan'
    ];
}
