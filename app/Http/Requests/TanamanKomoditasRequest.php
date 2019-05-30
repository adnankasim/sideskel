<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TanamanKomoditasRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'uraian_tanaman_komoditas' => 'required|string|max:100',
            'luas_tanaman_komoditas' => 'required|string|max:30',
            'produksi_per_ha' => 'required|string|max:30',
            'tahun_anggaran' => 'required|string|max:4',
        ];
    }
}
