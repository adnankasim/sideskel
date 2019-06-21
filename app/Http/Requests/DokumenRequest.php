<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DokumenRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        if($this->method() === 'PATCH'){
            $file_rule = 'sometimes|file|max:5000|mimes:docx,doc,pdf';
        }else{
            $file_rule = 'required|file|max:5000|mimes:docx,doc,pdf';
        }
        return [
            'file' => $file_rule,
            'keterangan' => 'required|string',
        ];
    }
}
