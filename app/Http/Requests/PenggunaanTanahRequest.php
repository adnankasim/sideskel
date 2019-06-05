<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PenggunaanTanahRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'uraian_penggunaan_tanah' => 'required|string|max:300',
            'keterangan_penggunaan_tanah' => 'required|string|max:50',
        ];
    }
}
