<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IklimRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'uraian_iklim' => 'required|string|max:100',
            'keterangan_iklim' => 'required|string|max:100',
        ];
    }
}
