<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfilRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nama' => 'required|string|max:200',
            'alamat' => 'required|string|max:300',
            'telepon' => 'required|string|max:15',
            'email' => 'required|string|max:100',
            'deskripsi' => 'required|string',
            'logo' => 'sometimes|image|max:5000|mimes:jpeg,jpg,bmp,png',
            'visi_misi' => 'required|string',
        ];
    }
}
