<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrbitasiRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'jarak_ke_kecamatan' => 'required|string|max:30',
            'jarak_ke_kabupaten' => 'required|string|max:30',
            'jarak_ke_kota' => 'required|string|max:30',
            'lama_tempuh_ke_kota' => 'required|string|max:30',
            'lama_tempuh_ke_kabupaten' => 'required|string|max:30',
            'lama_tempuh_ke_kecamatan' => 'required|string|max:30',
        ];
    }
}
