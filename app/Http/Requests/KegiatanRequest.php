<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KegiatanRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        if($this->method() === 'PATCH'){
            $poster_rule = 'sometimes|image|max:5000|mimes:jpeg,jpg,bmp,png';
        }else{
            $poster_rule = 'required|image|max:5000|mimes:jpeg,jpg,bmp,png';
        }
        return [
            'judul_kegiatan' => 'required|string|max:100',
            'slug_kegiatan' => 'required|string|max:100',
            'waktu_kegiatan' => 'required|',
            'deskripsi_kegiatan' => 'required|string',
            'poster_kegiatan' => $poster_rule,
        ];
    }
}
