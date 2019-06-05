<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BatasRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'mata_angin' => 'required|string|max:400',
            'uraian' => 'required|string|max:300'
        ];
    }
}
