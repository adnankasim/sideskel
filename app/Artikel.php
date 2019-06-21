<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = 'artikel';

    protected $fillable = [
        'judul_artikel', 'slug_artikel', 'isi_artikel', 'gambar_artikel', 'id_pengguna', 'is_valid'
    ];

    protected $attributes = [
        'is_valid' => 'tidak'
    ];

    // Relasi N-1 dengan pengguna
    public function pengguna(){
        return $this->belongsTo('App\Pengguna', 'id_pengguna');
    }
}
