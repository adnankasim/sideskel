<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Iklim extends Model
{
    protected $table = 'iklim';

    public $timestamps = false;

    protected $fillable = ['uraian_iklim', 'keterangan_iklim'];
}
