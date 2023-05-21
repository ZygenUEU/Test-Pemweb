@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.game.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.games.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="gamename">{{ trans('cruds.game.fields.gamename') }}</label>
                <input class="form-control {{ $errors->has('gamename') ? 'is-invalid' : '' }}" type="text" name="gamename" id="gamename" value="{{ old('gamename', '') }}" required>
                @if($errors->has('gamename'))
                    <div class="invalid-feedback">
                        {{ $errors->first('gamename') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.game.fields.gamename_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="developer">{{ trans('cruds.game.fields.developer') }}</label>
                <input class="form-control {{ $errors->has('developer') ? 'is-invalid' : '' }}" type="text" name="developer" id="developer" value="{{ old('developer', '') }}" required>
                @if($errors->has('developer'))
                    <div class="invalid-feedback">
                        {{ $errors->first('developer') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.game.fields.developer_helper') }}</span>
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