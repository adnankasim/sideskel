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
            'uraian' => 'required|string|max:300',
            'keterangan' => 'required|string|max:300'
        ];
    }
}
