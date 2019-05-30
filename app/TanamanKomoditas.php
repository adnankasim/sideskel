<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TanamanKomoditas extends Model
{
    protected $table = 'tanaman_komoditas';

    public $timestamps = false;

    protected $fillable = ['uraian_tanaman_komoditas', 'luas_tanaman_komoditas', 'produksi_per_ha', 'tahun_anggaran'];
    
}
