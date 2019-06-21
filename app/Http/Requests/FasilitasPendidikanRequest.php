<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FasilitasPendidikanRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'jenis_fasilitas_pendidikan' => 'required|string|max:100',
            'keterangan_fasilitas_pendidikan' => 'required|string|max:50',
        ];
    }
}
