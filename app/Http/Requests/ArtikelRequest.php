<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArtikelRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        if($this->method() === 'PATCH'){
            $gambar_rule = 'sometimes|image|max:5000|mimes:jpeg,jpg,bmp,png';
        }else{
            $gambar_rule = 'required|image|max:5000|mimes:jpeg,jpg,bmp,png';
        }
        return [
            'judul_artikel' => 'required|string|max:100',
            'slug_artikel' => 'required|string|max:100',
            'isi_artikel' => 'required|string',
            'gambar_artikel' => $gambar_rule,
            'id_pengguna' => 'required|integer',
        ];
    }
}
