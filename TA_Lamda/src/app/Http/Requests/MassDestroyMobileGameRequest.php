<?php

namespace App\Http\Requests;

use App\Models\MobileGame;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyMobileGameRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('mobilegame_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:mobilegames,id',
        ];
    }
}
