<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FasilitasPrasaranaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'jenis_fasilitas_prasarana' => 'required|string|max:100',
            'keterangan_fasilitas_prasarana' => 'required|string|max:50',
        ];
    }
}
