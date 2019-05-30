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
            'nama_dokumen' => 'required|string|max:100',
            'file_dokumen' => $file_rule,
        ];
    }
}
