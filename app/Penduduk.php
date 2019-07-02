<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    protected $table = 'penduduk';

    protected $fillable = [
        'nik', 'nama_penduduk', 'alamat_penduduk', 'status_menikah', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'foto_penduduk', 'pendidikan_terakhir', 'golongan_darah', 'agama', 'pekerjaan'
    ];

    protected $attributes = [
        'foto_penduduk' => 'default.jpg',
    ];

    public function scopePekerjaan($query, $pekerjaan){
      return $query->where('pekerjaan', 'like', '%' . $pekerjaan . '%');
    }

    public function scopeGolonganDarah($query, $darah){
      return $query->where('golongan_darah', $darah);
    }

    public function scopeAgama($query, $agama){
      return $query->where('agama', $agama);
    }

    public function scopeJenisKelamin($query, $kelamin){
      return $query->where('jenis_kelamin', $kelamin);
    }

}
