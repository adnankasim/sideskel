<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Iklim extends Model
{
    protected $table = 'iklim';

    protected $fillable = ['uraian_iklim', 'keterangan_iklim'];
}
