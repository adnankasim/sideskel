<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batas extends Model
{
    protected $table = 'batas';

    protected $fillable = ['mata_angin', 'uraian'];
}
