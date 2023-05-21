@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.anime.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.animes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.anime.fields.id') }}
                        </th>
                        <td>
                            {{ $anime->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.anime.fields.animename') }}
                        </th>
                        <td>
                            {{ $anime->animename }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.anime.fields.studio') }}
                        </th>
                        <td>
                            {{ $anime->studio }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.anime.fields.episode') }}
                        </th>
                        <td>
                            {{ $anime->episode }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.anime.fields.aired') }}
                        </th>
                        <td>
                            {{ $anime->aired }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.anime.fields.duration') }}
                        </th>
                        <td>
                            {{ $anime->duration }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.animes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection