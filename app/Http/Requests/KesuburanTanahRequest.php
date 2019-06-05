<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KesuburanTanahRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'uraian_kesuburan_tanah' => 'required|string|max:300',
            'luas_ha' => 'required|string|max:30',
            'keterangan_kesuburan_tanah' => 'required|string|max:300',
        ];
    }
}
