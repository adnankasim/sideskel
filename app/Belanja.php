<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Belanja extends Model
{
    protected $table = 'belanja';

    public $timestamps = false;

    protected $fillable = ['uraian_belanja', 'nominal_belanja', 'tahun'];
}
