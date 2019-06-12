<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendapatan extends Model
{
    protected $table = 'pendapatan';

    public $timestamps = false;

    protected $fillable = ['uraian_pendapatan', 'nominal_pendapatan', 'tahun'];
}
