<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemerintahan extends Model
{
    protected $table = 'pemerintahan';

    public $timestamps = false;

    protected $fillable = ['nama_pemerintahan', 'jabatan_pemerintahan', 'masa_bakti_pemerintahan'];
}
