<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BelanjaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'uraian_belanja' => 'required|string|max:300',
            'nominal_belanja' => 'required|string|max:300',
            'tahun' => 'required|string|max:4',
        ];
    }
}
