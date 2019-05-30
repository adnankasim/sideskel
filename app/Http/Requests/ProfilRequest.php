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
            'logo' => 'required|string',
            'visi_misi' => 'required|string',
        ];
    }
}
