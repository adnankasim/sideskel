<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PemerintahanRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nama_pemerintahan' => 'required|string|max:255',
            'jabatan_pemerintahan' => 'required|string|max:100',
            'masa_bakti_pemerintahan' => 'required|string|max:30',
        ];
    }
}
