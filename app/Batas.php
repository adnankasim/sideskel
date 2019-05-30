<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batas extends Model
{
    protected $table = 'batas';

    public $timestamps = false;

    protected $fillable = ['utara', 'selatan', 'barat', 'timur'];
}
