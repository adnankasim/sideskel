<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemerintahan extends Model
{
    protected $table = 'pemerintahan';

    public $timestamps = false;

    protected $fillable = ['nama_pemerintahan', 'jabatan_pemerintahan', 'foto_pemerintahan'];
}
