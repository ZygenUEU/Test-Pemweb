@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.film.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.films.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="filmname">{{ trans('cruds.film.fields.filmname') }}</label>
                <input class="form-control {{ $errors->has('filmname') ? 'is-invalid' : '' }}" type="text" name="filmname" id="filmname" value="{{ old('filmname', '') }}" required>
                @if($errors->has('filmname'))
                    <div class="invalid-feedback">
                        {{ $errors->first('filmname') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.film.fields.filmname_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="director">{{ trans('cruds.film.fields.director') }}</label>
                <input class="form-control {{ $errors->has('director') ? 'is-invalid' : '' }}" type="text" name="director" id="director" value="{{ old('director', '') }}" required>
                @if($errors->has('director'))
                    <div class="invalid-feedback">
                        {{ $errors->first('director') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.film.fields.director_helper') }}</span>
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