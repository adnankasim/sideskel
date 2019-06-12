<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PendapatanRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'uraian_pendapatan' => 'required|string|max:300',
            'nominal_pendapatan' => 'required|string|max:300',
            'tahun' => 'required|string|max:4',
        ];
    }
}
