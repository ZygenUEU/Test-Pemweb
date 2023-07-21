@extends('layouts.admin')
@section('content')
@include('partials.styles')

<a class="btn btn-danger" href="{{ route('admin.pcgames.index') }}">
    {{ trans('global.back_to_list') }}
</a>

<div class="card border-0 text-white mt-3">
    <div class="card-header h4" style="font-weight: 700;">
        Edit
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.pcgames.update", [$pcgame->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="gamename">{{ trans('cruds.pcgame.fields.gamename') }}</label>
                <input class="form-control {{ $errors->has('gamename') ? 'is-invalid' : '' }}" type="text" name="gamename" id="gamename" value="{{ old('gamename', $pcgame->gamename) }}" required>
                @if($errors->has('gamename'))
                    <div class="invalid-feedback">
                        {{ $errors->first('gamename') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pcgame.fields.gamename_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="developer">{{ trans('cruds.pcgame.fields.developer') }}</label>
                <input class="form-control {{ $errors->has('developer') ? 'is-invalid' : '' }}" type="text" name="developer" id="developer" value="{{ old('developer', $pcgame->developer) }}" required>
                @if($errors->has('developer'))
                    <div class="invalid-feedback">
                        {{ $errors->first('developer') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pcgame.fields.developer_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="about">{{ trans('cruds.pcgame.fields.about') }}</label>
                <textarea cols="50" rows="10" class="form-control {{ $errors->has('about') ? 'is-invalid' : '' }}" type="text" name="about" id="about" value="{{ old('about', $pcgame->about) }}" required>{{ old('about', $pcgame->about) }}</textarea>
                @if($errors->has('about'))
                    <div class="invalid-feedback">
                        {{ $errors->first('about') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pcgame.fields.about_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="genre">{{ trans('cruds.pcgame.fields.genre') }}</label>
                <input class="form-control {{ $errors->has('genre') ? 'is-invalid' : '' }}" type="text" name="genre" id="genre" value="{{ old('genre', $pcgame->genre) }}" required>
                @if($errors->has('genre'))
                    <div class="invalid-feedback">
                        {{ $errors->first('genre') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pcgame.fields.genre_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="publish_date">{{ trans('cruds.pcgame.fields.publish_date') }}</label>
                <input class="form-control {{ $errors->has('publish_date') ? 'is-invalid' : '' }}" type="text" name="publish_date" id="publish_date" value="{{ old('publish_date', $pcgame->publish_date) }}" required>
                @if($errors->has('publish_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('publish_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pcgame.fields.publish_date_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="download_url">{{ trans('cruds.pcgame.fields.download_url') }}</label>
                <input class="form-control {{ $errors->has('download_url') ? 'is-invalid' : '' }}" type="text" name="download_url" id="download_url" value="{{ old('download_url', $pcgame->download_url) }}" required>
                @if($errors->has('download_url'))
                    <div class="invalid-feedback">
                        {{ $errors->first('download_url') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pcgame.fields.download_url_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="thumbnail_url">{{ trans('cruds.pcgame.fields.thumbnail_url') }}</label>
                <input class="form-control {{ $errors->has('thumbnail_url') ? 'is-invalid' : '' }}" type="text" name="thumbnail_url" id="thumbnail_url" value="{{ old('thumbnail_url', $pcgame->thumbnail_url) }}" required>
                @if($errors->has('thumbnail_url'))
                    <div class="invalid-feedback">
                        {{ $errors->first('thumbnail_url') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pcgame.fields.thumbnail_url_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="screenshot_url_1">{{ trans('cruds.pcgame.fields.screenshot_url_1') }}</label>
                <input class="form-control {{ $errors->has('screenshot_url_1') ? 'is-invalid' : '' }}" type="text" name="screenshot_url_1" id="screenshot_url_1" value="{{ old('screenshot_url_1', $pcgame->screenshot_url_1) }}" required>
                @if($errors->has('screenshot_url_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('screenshot_url_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pcgame.fields.screenshot_url_1_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="screenshot_url_2">{{ trans('cruds.pcgame.fields.screenshot_url_2') }}</label>
                <input class="form-control {{ $errors->has('screenshot_url_2') ? 'is-invalid' : '' }}" type="text" name="screenshot_url_2" id="screenshot_url_2" value="{{ old('screenshot_url_2', $pcgame->screenshot_url_2) }}" required>
                @if($errors->has('screenshot_url_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('screenshot_url_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pcgame.fields.screenshot_url_2_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="screenshot_url_3">{{ trans('cruds.pcgame.fields.screenshot_url_3') }}</label>
                <input class="form-control {{ $errors->has('screenshot_url_3') ? 'is-invalid' : '' }}" type="text" name="screenshot_url_3" id="screenshot_url_3" value="{{ old('screenshot_url_3', $pcgame->screenshot_url_3) }}" required>
                @if($errors->has('screenshot_url_3'))
                    <div class="invalid-feedback">
                        {{ $errors->first('screenshot_url_3') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pcgame.fields.screenshot_url_3_helper') }}</span>
            </div>
            
            <div class="form-group">
                <label class="required" for="screenshot_url_4">{{ trans('cruds.pcgame.fields.screenshot_url_4') }}</label>
                <input class="form-control {{ $errors->has('screenshot_url_4') ? 'is-invalid' : '' }}" type="text" name="screenshot_url_4" id="screenshot_url_4" value="{{ old('screenshot_url_4', $pcgame->screenshot_url_4) }}" required>
                @if($errors->has('screenshot_url_4'))
                    <div class="invalid-feedback">
                        {{ $errors->first('screenshot_url_4') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pcgame.fields.screenshot_url_4_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="video_url">{{ trans('cruds.pcgame.fields.video_url') }}</label>
                <input class="form-control {{ $errors->has('video_url') ? 'is-invalid' : '' }}" type="text" name="video_url" id="video_url" value="{{ old('video_url', $pcgame->video_url) }}" required>
                @if($errors->has('video_url'))
                    <div class="invalid-feedback">
                        {{ $errors->first('video_url') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pcgame.fields.video_url_helper') }}</span>
            </div>

            

            <div class="form-group">
                <label class="required" for="postedby">{{ trans('cruds.pcgame.fields.postedby') }}</label>
                <input class="form-control {{ $errors->has('postedby') ? 'is-invalid' : '' }}" type="text" name="postedby" id="postedby" value="{{ old('postedby', $pcgame->postedby) }}" readonly>
                @if($errors->has('postedby'))
                    <div class="invalid-feedback">
                        {{ $errors->first('postedby') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.pcgame.fields.postedby_helper') }}</span>
            </div>

            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection