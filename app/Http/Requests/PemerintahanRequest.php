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
            'nama_pemerintahan' => 'required|string|max:300',
            'jabatan_pemerintahan' => 'required|string|max:300',
            'foto_pemerintahan' => 'sometimes|image|max:5000|mimes:jpeg,jpg,bmp,png'
        ];
    }
}
