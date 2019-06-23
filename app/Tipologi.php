<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipologi extends Model
{
    protected $table = 'tipologi';

    protected $fillable = ['uraian_tipologi', 'keterangan_tipologi'];
}
