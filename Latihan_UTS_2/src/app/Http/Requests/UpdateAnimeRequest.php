<?php

namespace App\Http\Requests;

use App\Models\Anime;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateAnimeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('anime_edit');
    }

    public function rules()
    {
        return [
            'animename' => [
                'string',
                'required',
            ],
            'studio' => [
                'string',
                'required',
            ],
            'episode' => [
                'string',
                'required',
            ],
            'aired' => [
                'string',
                'required',
            ],
            'duration' => [
                'string',
                'required',
            ],
        ];
    }
}
