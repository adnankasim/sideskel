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
            'utara' => 'required|string|max:200',
            'selatan' => 'required|string|max:200',
            'barat' => 'required|string|max:200',
            'timur' => 'required|string|max:200',
        ];
    }
}
