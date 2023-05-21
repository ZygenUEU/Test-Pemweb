<?php

namespace App\Http\Requests;

use App\Models\Anime;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreAnimeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('anime_create');
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
