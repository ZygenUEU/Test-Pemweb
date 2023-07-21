<?php

namespace App\Http\Requests;

use App\Models\PasienRumahSakit;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePasienRumahSakitRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('pasien_rumah_sakit_edit');
    }

    public function rules()
    {
        return [
            'namapasien' => [
                'string',
                'required',
            ],
            'penyakit' => [
                'string',
                'required',
            ],
            'umur' => [
                'string',
                'required',
            ],
            'kelamin' => [
                'string',
                'required',
            ],
        ];
    }
}
