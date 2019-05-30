<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = 'kegiatan';

    protected $fillable = [
        'judul_kegiatan', 'slug_kegiatan', 'waktu_kegiatan', 'deskripsi_kegiatan', 'poster_kegiatan'
    ];
}
