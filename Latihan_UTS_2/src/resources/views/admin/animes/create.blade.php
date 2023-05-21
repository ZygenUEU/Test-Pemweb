@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.anime.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.animes.store") }}" enctype="multipart/form-data">
            @csrf
            {{-- BARIS FORM 1 --}}
            <div class="form-group">
                <label class="required" for="animename">{{ trans('cruds.anime.fields.animename') }}</label>
                <input class="form-control {{ $errors->has('animename') ? 'is-invalid' : '' }}" type="text" name="animename" id="animename" value="{{ old('animename', '') }}" required>
                @if($errors->has('animename'))
                    <div class="invalid-feedback">
                        {{ $errors->first('animename') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.anime.fields.animename_helper') }}</span>
            </div>
            {{-- AKHIR BARIS FORM 1 --}}

            {{-- BARIS FORM 2 --}}
            <div class="form-group">
                <label class="required" for="studio">{{ trans('cruds.anime.fields.studio') }}</label>
                <input class="form-control {{ $errors->has('studio') ? 'is-invalid' : '' }}" type="text" name="studio" id="studio" value="{{ old('studio', '') }}" required>
                @if($errors->has('studio'))
                    <div class="invalid-feedback">
                        {{ $errors->first('studio') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.anime.fields.studio_helper') }}</span>
            </div>
            {{-- AKHIR BARIS FORM 2 --}}

            {{-- BARIS FORM 3 --}}
            <div class="form-group">
                <label class="required" for="episode">{{ trans('cruds.anime.fields.episode') }}</label>
                <input class="form-control {{ $errors->has('episode') ? 'is-invalid' : '' }}" type="text" name="episode" id="episode" value="{{ old('episode', '') }}" required>
                @if($errors->has('episode'))
                    <div class="invalid-feedback">
                        {{ $errors->first('episode') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.anime.fields.episode_helper') }}</span>
            </div>
            {{-- AKHIR BARIS FORM 3 --}}

            {{-- BARIS FORM 4 --}}
            <div class="form-group">
                <label class="required" for="aired">{{ trans('cruds.anime.fields.aired') }}</label>
                <input class="form-control {{ $errors->has('aired') ? 'is-invalid' : '' }}" type="text" name="aired" id="aired" value="{{ old('aired', '') }}" required>
                @if($errors->has('aired'))
                    <div class="invalid-feedback">
                        {{ $errors->first('aired') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.anime.fields.aired_helper') }}</span>
            </div>
            {{-- AKHIR BARIS FORM 4 --}}

            {{-- BARIS FORM 5 --}}
            <div class="form-group">
                <label class="required" for="duration">{{ trans('cruds.anime.fields.duration') }}</label>
                <input class="form-control {{ $errors->has('duration') ? 'is-invalid' : '' }}" type="text" name="duration" id="duration" value="{{ old('duration', '') }}" required>
                @if($errors->has('duration'))
                    <div class="invalid-feedback">
                        {{ $errors->first('duration') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.anime.fields.duration_helper') }}</span>
            </div>
            {{-- AKHIR BARIS FORM 5 --}}

            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection