<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';

    public $timestamps = false;

    protected $fillable = ['nama_admin', 'email_admin', 'password_admin', 'jenis_kelamin', 'no_hp', 'terakhir_login'];
}
