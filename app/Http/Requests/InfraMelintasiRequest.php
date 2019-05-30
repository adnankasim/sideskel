<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InfraMelintasiRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'uraian_infra_melintasi' => 'required|string|max:100',
            'panjang_infra_melintasi' => 'required|string|max:50',
            'lebar_infra_melintasi' => 'required|string|max:50',
        ];
    }
}
