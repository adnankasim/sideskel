<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PelayananRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nama' => 'required|string|max:300',
            'keterangan' => 'required|string',
        ];
    }
}
