<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FasilitasEkonomi extends Model
{
    protected $table = 'fasilitas_ekonomi';

    protected $fillable = [
        'jenis_fasilitas_ekonomi', 'keterangan_fasilitas_ekonomi'
    ];
}
