<?php

namespace App\Http\Requests;

use App\Models\Film;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyFilmRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('film_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:filmss,id',
        ];
    }
}
