<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = 'kegiatan';

    protected $fillable = [
        'nama_kegiatan', 'slug_kegiatan', 'deskripsi_kegiatan', 'poster_kegiatan'
    ];

}
