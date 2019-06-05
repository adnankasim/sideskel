<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TipologiRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'uraian_tipologi' => 'required|string|max:300',
            'keterangan_tipologi' => 'required|in:ya,tidak',
        ];
    }
}
