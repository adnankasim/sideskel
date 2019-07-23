<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PenggunaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        if($this->method() === 'PATCH'){
            $pass_rule = 'sometimes|max:100';
        }else{
            $pass_rule = 'required|string|max:100';
        }
        return [
            'nama_pengguna' => 'required|string|max:100',
            'email_pengguna' => 'required|string|max:100',
            'password_pengguna' => $pass_rule,
            'jenis_kelamin' => 'required|in:perempuan,laki-laki',
            'no_hp' => 'required|string|max:15',
            'foto_pengguna' => 'sometimes|image|max:5000|mimes:jpeg,jpg,bmp,png',
        ];
    }
}
