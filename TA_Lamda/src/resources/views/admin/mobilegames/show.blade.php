@extends('layouts.admin')
@section('content')
    @include('partials.styles')


    {{-- <div class="card">
        <div class="card-header">
            {{ trans('global.show') }} {{ trans('cruds.mobilegame.title') }}
        </div>

        <div class="card-body">
            <div class="form-group">
                <div class="form-group">
                    <a class="btn btn-default" href="{{ route('admin.mobilegames.index') }}">
                        {{ trans('global.back_to_list') }}
                    </a>
                </div>
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <th>
                                {{ trans('cruds.mobilegame.fields.id') }}
                            </th>
                            <td>
                                {{ $mobilegame->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.mobilegame.fields.gamename') }}
                            </th>
                            <td>
                                {{ $mobilegame->gamename }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.mobilegame.fields.developer') }}
                            </th>
                            <td>
                                {{ $mobilegame->developer }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.mobilegame.fields.download_url') }}
                            </th>
                            <td>
                                {{ $mobilegame->download_url }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.mobilegame.fields.thumbnail_url') }}
                            </th>
                            <td>
                                {{ $mobilegame->thumbnail_url }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.mobilegame.fields.genre') }}
                            </th>
                            <td>
                                {{ $mobilegame->genre }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.mobilegame.fields.publish_date') }}
                            </th>
                            <td>
                                {{ $mobilegame->publish_date }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.mobilegame.fields.postedby') }}
                            </th>
                            <td>
                                {{ $mobilegame->postedby }}
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="form-group">
                    <a class="btn btn-default" href="{{ route('admin.mobilegames.index') }}">
                        {{ trans('global.back_to_list') }}
                    </a>
                </div>
            </div>
        </div>
    </div> --}}

    <a class="btn btn-danger" href="{{ route('admin.mobilegames.index') }}">
        {{ trans('global.back_to_list') }}
    </a>

    <div class="text-white h1 mt-3" style="font-weight: 700;">{{ $mobilegame->gamename }}</div>
    <p class="text-gray">Posted By: {{ $mobilegame->postedby }}</p>

    <hr>

    <div class="row text-white h5">
        <div class="col-md-6 order-2 order-md-1">
            <p class="font-weight-bold">
                About
            </p>
            <p class="font-weight-normal text-justify" style="line-height: normal;">
                {{ $mobilegame->about }}
            </p>

            <hr>

            <p class="font-weight-normal">
                <span class="text-muted">Genre: </span> 
                <span class="text-white">{{ $mobilegame->genre }}</span>
            </p>
            <p class="font-weight-normal">
                <span class="text-muted">Developer: </span> 
                <span class="text-white">{{ $mobilegame->developer }}</span>
            </p>
            <p class="font-weight-normal">
                <span class="text-muted">Release Date: </span> 
                <span class="text-white">{{ $mobilegame->publish_date }}</span>
            </p>
        </div>
        <div class="col-md-6 order-1 order-md-2">
            <div class="video-container">
                <iframe
                  src="{{ $mobilegame->video_url }}"
                  frameborder="0"
                  allow="accelerometer; autoplay; encrypted-media; gyroscope;"
                  allowfullscreen></iframe>
            </div>

            {{-- <img src="{{ $mobilegame->thumbnail_url }}" class="img-fluid rounded w-100" alt="..."> --}}

            <div class="owl-carousel screenshot-carousel mt-4">
                <div class="item">
                    <a href="{{ $mobilegame->thumbnail_url }}" data-lightbox="carousel">
                        <img src="{{ $mobilegame->thumbnail_url }}" class="item img-fluid rounded w-100" alt="...">
                    </a>
                </div>
                <div class="item">
                    <a href="{{ $mobilegame->screenshot_url_1 }}" data-lightbox="carousel">
                        <img src="{{ $mobilegame->screenshot_url_1 }}" class="item img-fluid rounded w-100" alt="...">
                    </a>
                </div>
                <div class="item">
                    <a href="{{ $mobilegame->screenshot_url_2 }}" data-lightbox="carousel">
                        <img src="{{ $mobilegame->screenshot_url_2 }}" class="item img-fluid rounded w-100" alt="...">
                    </a>
                </div>
                <div class="item">
                    <a href="{{ $mobilegame->screenshot_url_3 }}" data-lightbox="carousel">
                        <img src="{{ $mobilegame->screenshot_url_3 }}" class="item img-fluid rounded w-100" alt="...">
                    </a>
                </div>
                <div class="item">
                    <a href="{{ $mobilegame->screenshot_url_4 }}" data-lightbox="carousel">
                        <img src="{{ $mobilegame->screenshot_url_4 }}" class="item img-fluid rounded w-100" alt="...">
                    </a>
                </div>
            </div>
            <a href="{{ $mobilegame->download_url }}" class="w-100 btn btn-primary mt-3 mb-5" style="background-color: #0077ff;">{{ trans('global.download') }}</a>
        </div>
    </div>

    @include('partials.scripts')
@endsection
