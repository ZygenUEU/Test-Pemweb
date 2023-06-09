<?php

namespace App\Http\Requests;

use App\Models\Game;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreGameRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('game_create');
    }

    public function rules()
    {
        return [
            'gamename' => [
                'string',
                'required',
            ],
            'developer' => [
                'string',
                'required',
            ],
        ];
    }
}
