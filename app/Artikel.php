<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = 'artikel';

    protected $fillable = [
        'judul_artikel', 'slug_artikel', 'isi_artikel', 'gambar_artikel', 'id_pengguna'
    ];

    public $timestamps = false;

    // Relasi N-1 dengan user
    public function user(){
        return $this->belongsTo('App\Pengguna', 'id_pengguna');
    }
}
