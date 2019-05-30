<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orbitasi extends Model
{
    protected $table = 'orbitasi';

    public $timestamps = false;

    protected $fillable = [
        'jarak_ke_kecamatan', 'lama_tempuh_ke_kecamatan', 'jarak_ke_kabupaten', 'lama_tempuh_ke_kabupaten', 'jarak_ke_kota', 'lama_tempuh_ke_kota'
    ];
}
