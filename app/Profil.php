<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $table = 'profil';

    public $timestamps = false;

    protected $fillable = ['nama', 'alamat', 'telepon', 'email', 'deskripsi', 'logo', 'visi_misi'];
}
