<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PendudukRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nik' => 'required|string|max:20',
            'nama_penduduk' => 'required|string|max:255',
            'alamat_penduduk' => 'required|string|max:255',
            'status_menikah' => 'required|in:sudah,belum',
            'jenis_kelamin' => 'required|in:laki-laki,perempuan',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'foto_penduduk' => 'sometimes|image|max:5000|mimes:jpeg,jpg,bmp,png',
            'pendidikan_terakhir' => 'required|in:tidak sekolah,tk,sd,smp,sma,d1,d2,d3,s1,s2,s3',
            'agama' => 'required|string',
            'pekerjaan' => 'required|string'
        ];
    }
}
