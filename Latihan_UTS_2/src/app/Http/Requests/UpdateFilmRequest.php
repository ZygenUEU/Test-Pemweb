<?php

namespace App\Http\Requests;

use App\Models\Film;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateFilmRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('film_edit');
    }

    public function rules()
    {
        return [
            'filmname' => [
                'string',
                'required',
            ],
            'director' => [
                'string',
                'required',
            ],
        ];
    }
}
