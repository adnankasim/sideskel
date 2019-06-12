<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FasilitasPemukimanRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'uraian_fasilitas_pemukiman' => 'required|string|max:100',
            'jumlah_fasilitas_pemukiman' => 'required|string|max:50',
            'pengguna_fasilitas_pemukiman' => 'required|string|max:50',
        ];
    }
}
