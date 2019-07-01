<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnggotaLembagaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        if($this->method() === 'PATCH'){
            $foto_rule = 'sometimes|image|max:5000|mimes:jpeg,jpg,bmp,png';
        }else{
            $foto_rule = 'required|image|max:5000|mimes:jpeg,jpg,bmp,png';
        }
        return [
            'nama' => 'required|string|max:300',
            'jabatan' => 'required|string|max:300',
            'foto' => $foto_rule,
            'id_lembaga' => 'required|integer'
        ];
    }
}
