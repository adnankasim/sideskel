<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfraMelintasi extends Model
{
    protected $table = 'infra_melintasi';

    protected $fillable = [
        'uraian_infra_melintasi', 'panjang_infra_melintasi', 'lebar_infra_melintasi'
    ];
}
