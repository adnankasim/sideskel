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
            'no_kk' => 'required|string|max:20',
            'nama_penduduk' => 'required|string|max:255',
            'alamat_penduduk' => 'required|string|max:255',
            'status_menikah' => 'required|string|max:30',
            'jenis_kelamin' => 'required|in:laki-laki,perempuan',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'foto_penduduk' => 'sometimes|image|max:5000|mimes:jpeg,jpg,bmp,png',
            'pendidikan_terakhir' => 'required|string|max:100',
            'agama' => 'required|string|max:100',
            'pekerjaan' => 'required|string|max:200',
            'lingkungan' => 'required|string|max:3',
            'rt' => 'required|string|max:3',
            'rw' => 'required|string|max:3',
        ];
    }
}
