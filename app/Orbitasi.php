<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orbitasi extends Model
{
    protected $table = 'orbitasi';

    protected $fillable = ['uraian', 'keterangan'];
}
