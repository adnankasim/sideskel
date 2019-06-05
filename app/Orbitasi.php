<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orbitasi extends Model
{
    protected $table = 'orbitasi';

    public $timestamps = false;

    protected $fillable = ['uraian', 'keterangan'];
}
