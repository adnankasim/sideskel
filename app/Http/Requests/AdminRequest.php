<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            'nama_admin' => 'required|string|max:100',
            'email_admin' => 'required|string|max:100',
            'password_admin' => $pass_rule,
            'jenis_kelamin' => 'required|in:perempuan,laki-laki',
            'no_hp' => 'required|string|max:15',
        ];
    }
}
