<?php

namespace App\Http\Requests;

use App\Models\MobileGame;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateMobileGameRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('mobilegame_edit');
    }

    public function rules()
    {
        return [
            'postedby' => [
                'string',
            ],
            'gamename' => [
                'string',
                'required',
            ],
            'developer' => [
                'string',
                'required',
            ],
            'download_url' => [
                'string',
                'required',
            ],
            'thumbnail_url' => [
                'string',
                'required',
            ],
            'genre' => [
                'string',
                'required',
            ],
            'about' => [
                'string',
                'required',
            ],
            'screenshot_url_1' => [
                'string',
                'required',
            ],
            'screenshot_url_2' => [
                'string',
                'required',
            ],
            'screenshot_url_3' => [
                'string',
                'required',
            ],
            'screenshot_url_4' => [
                'string',
                'required',
            ],
            'video_url' => [
                'string',
                'required',
            ],
            'publish_date' => [
                'string',
                'required',
            ],
        ];
    }
}
