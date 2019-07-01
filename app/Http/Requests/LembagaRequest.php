<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LembagaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        if($this->method() === 'PATCH'){
            $logo_rule = 'sometimes|image|max:5000|mimes:jpeg,jpg,bmp,png';
        }else{
            $logo_rule = 'required|image|max:5000|mimes:jpeg,jpg,bmp,png';
        }
        return [
            'nama' => 'required|string|max:300',
            'deskripsi' => 'required|string',
            'logo' => $logo_rule
        ];
    }
}
