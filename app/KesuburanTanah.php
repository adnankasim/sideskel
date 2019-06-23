<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KesuburanTanah extends Model
{
    protected $table = 'kesuburan_tanah';

    protected $fillable = ['uraian_kesuburan_tanah', 'keterangan_kesuburan_tanah', 'luas_ha'];
}
