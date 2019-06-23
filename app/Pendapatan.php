<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendapatan extends Model
{
    protected $table = 'pendapatan';

    protected $fillable = ['uraian_pendapatan', 'nominal_pendapatan', 'tahun'];
}
