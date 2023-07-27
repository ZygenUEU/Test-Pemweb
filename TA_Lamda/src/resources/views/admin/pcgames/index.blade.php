@extends('layouts.admin')
@section('content')
    @include('partials.styles')


    @can('pcgame_create')
        <div style="margin-bottom: 10px;" class="text-white">
            <a href="{{ route('admin.pcgames.create') }}" class="add-btn text-center">
                <i class="fa fa-solid fa-plus fa-2xl"></i>
            </a>
        </div>
    @endcan

    {{-- @can('database_access')
        <div class="card">
            <div class="card-header">
                {{ trans('cruds.pcgame.title_singular') }} {{ trans('global.list') }}
            </div>

            <div class="card-body">
                <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-PCGame">
                    <thead>
                        <tr>
                            <th width="10">

                            </th>
                            <th>
                                {{ trans('cruds.pcgame.fields.id') }}
                            </th>
                            <th>
                                {{ trans('cruds.pcgame.fields.gamename') }}
                            </th>
                            <th>
                                {{ trans('cruds.pcgame.fields.developer') }}
                            </th>
                            <th>
                                {{ trans('cruds.pcgame.fields.about') }}
                            </th>
                            <th>
                                {{ trans('cruds.pcgame.fields.genre') }}
                            </th>
                            <th>
                                {{ trans('cruds.pcgame.fields.publish_date') }}
                            </th>
                            <th>
                                {{ trans('cruds.pcgame.fields.download_url') }}
                            </th>
                            <th>
                                {{ trans('cruds.pcgame.fields.thumbnail_url') }}
                            </th>
                            <th>
                                {{ trans('cruds.pcgame.fields.screenshot_url_1') }}
                            </th>
                            <th>
                                {{ trans('cruds.pcgame.fields.screenshot_url_2') }}
                            </th>
                            <th>
                                {{ trans('cruds.pcgame.fields.screenshot_url_3') }}
                            </th>
                            <th>
                                {{ trans('cruds.pcgame.fields.screenshot_url_4') }}
                            </th>
                            <th>
                                {{ trans('cruds.pcgame.fields.video_url') }}
                            </th>
                            <th>
                                {{ trans('cruds.pcgame.fields.postedby') }}
                            </th>
                            <th>
                                &nbsp;
                            </th>
                        </tr>
                        <tr>
                            <td>
                            </td>

                            <td>
                                <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                            </td>
                            <td>
                                <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                            </td>
                            <td>
                                <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                            </td>
                            <td>
                                <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                            </td>
                            <td>
                                <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                            </td>
                            <td>
                                <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                            </td>
                            <td>
                                <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                            </td>
                            <td>
                                <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                            </td>
                            <td>
                                <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                            </td>
                            <td>
                                <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                            </td>
                            <td>
                                <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                            </td>
                            <td>
                                <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                            </td>
                            <td>
                                <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                            </td>
                            <td>
                                <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                            </td>
                            <td>
                            </td>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    @endcan --}}

    <div class="form-group mt-5">
        <input type="text" id="searchInput" class="form-control" placeholder="Search.." style="background-color: #1b1b1b;">
    </div>

    <div class="form-check text-white">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="titleRadio" checked>
        <label class="form-check-label mr-4" for="titleRadio">
            Title
        </label>
        
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="genreRadio">
        <label class="form-check-label mr-4" for="genreRadio">
            Genre
        </label>

        <input class="form-check-input" type="radio" name="flexRadioDefault" id="postRadio">
        <label class="form-check-label" for="postRadio">
            Post
        </label>
    </div>
    

    <hr>

    <div class="card-columns mt-5">
        @foreach ($pcgames as $pcgame)
            <div class="card card-item text-white border-0" data-card-id="{{ $pcgame->id }}" style="background-color: #202020;">
                <img src="{{ $pcgame->thumbnail_url }}" class="card-img-top" alt="{{ $pcgame->gamename }}">

                <p class="card-post mt-2 ml-3 mr-3" style="color:gray">Posted By: {{ $pcgame->postedby }}</p>

                <a class="text-decoration-none text-white" href="{{ route('admin.pcgames.show', $pcgame->id) }}">
                    <h5 class="card-title ml-3 mr-3">{{ $pcgame->gamename }}</h5>
                </a>

                {{-- <h5 class="card-title ml-3 mr-3">{{ $pcgame->gamename }}</h5> --}}

                <div class="card-body card-item-body">

                    <div class="row" style="margin-bottom: -10px;">
                        <div class="col-md-6">
                            <p class="card-text">
                                {{ trans('cruds.pcgame.fields.developer') }}:
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p class="card-dev" style="float: right; text-align: right">{{ $pcgame->developer }}</p>
                        </div>
                    </div>

                    <div class="row" style="margin-bottom: -10px;">
                        <div class="col-md-6">
                            <p class="card-text">
                                {{ trans('cruds.pcgame.fields.genre') }}:
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p class="card-genre" style="float: right; text-align: right">{{ $pcgame->genre }}</p>
                        </div>
                    </div>

                    <div class="row" style="margin-bottom: -10px;">
                        <div class="col-md-6">
                            <p class="card-text">
                                {{ trans('cruds.pcgame.fields.publish_date') }}:
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p style="float: right; text-align: right">{{ $pcgame->publish_date }}</p>
                        </div>
                    </div>


                    <div>
                        {{-- <a href="{{ $pcgame->download_url }}" class="w-100 btn btn-primary mt-3">{{ trans('global.download') }}</a> --}}

                        <br>

                        @can('pcgame_edit')
                            @if ($pcgame->postedby === Auth::user()->name || Auth::user()->name === 'Admin')
                                <a class="w-100 btn btn-info mt-3" href="{{ route('admin.pcgames.edit', $pcgame->id) }}">
                                    {{ trans('global.edit') }}
                                </a>
                            @endif
                        @endcan

                        <br>

                        @can('pcgame_delete')
                            <form action="{{ route('admin.pcgames.destroy', $pcgame->id) }}" method="POST"
                                onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;"
                                class="w-100">

                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                {{-- <input type="submit" class="w-100 btn btn-danger mt-3" value="{{ trans('global.delete') }}"> --}}

                                @if ($pcgame->postedby === Auth::user()->name || Auth::user()->name === 'Admin')
                                    <input type="submit" class="w-100 btn btn-danger mt-3"
                                        value="{{ trans('global.delete') }}">
                                @endif

                            </form>
                        @endcan
                    </div>

                </div>
            </div>
        @endforeach
    </div>

@endsection

@section('scripts')
    @parent
    <script>
        $(function() {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
            @can('pcgame_delete')
                let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
                let deleteButton = {
                    text: deleteButtonTrans,
                    url: "{{ route('admin.pcgames.massDestroy') }}",
                    className: 'btn-danger',
                    action: function(e, dt, node, config) {
                        var ids = $.map(dt.rows({
                            selected: true
                        }).data(), function(entry) {
                            return entry.id
                        });

                        if (ids.length === 0) {
                            alert('{{ trans('global.datatables.zero_selected') }}')

                            return
                        }

                        if (confirm('{{ trans('global.areYouSure') }}')) {
                            $.ajax({
                                    headers: {
                                        'x-csrf-token': _token
                                    },
                                    method: 'POST',
                                    url: config.url,
                                    data: {
                                        ids: ids,
                                        _method: 'DELETE'
                                    }
                                })
                                .done(function() {
                                    location.reload()
                                })
                        }
                    }
                }
                dtButtons.push(deleteButton)
            @endcan

            let dtOverrideGlobals = {
                buttons: dtButtons,
                processing: true,
                serverSide: true,
                retrieve: true,
                aaSorting: [],
                ajax: "{{ route('admin.pcgames.index') }}",
                columns: [{
                        data: 'placeholder',
                        name: 'placeholder'
                    },
                    {
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'gamename',
                        name: 'gamename'
                    },
                    {
                        data: 'developer',
                        name: 'developer'
                    },
                    {
                        data: 'about',
                        name: 'about'
                    },
                    {
                        data: 'genre',
                        name: 'genre'
                    },
                    {
                        data: 'publish_date',
                        name: 'publish_date'
                    },
                    {
                        data: 'download_url',
                        name: 'download_url'
                    },
                    {
                        data: 'thumbnail_url',
                        name: 'thumbnail_url'
                    },
                    {
                        data: 'screenshot_url_1',
                        name: 'screenshot_url_1'
                    },
                    {
                        data: 'screenshot_url_2',
                        name: 'screenshot_url_2'
                    },
                    {
                        data: 'screenshot_url_3',
                        name: 'screenshot_url_3'
                    },
                    {
                        data: 'screenshot_url_4',
                        name: 'screenshot_url_4'
                    },
                    {
                        data: 'video_url',
                        name: 'video_url'
                    },
                    {
                        data: 'postedby',
                        name: 'postedby'
                    },
                    {
                        data: 'actions',
                        name: '{{ trans('global.actions') }}'
                    }
                ],
                orderCellsTop: true,
                order: [
                    [1, 'asc']
                ],
                pageLength: 10,
            };
            let table = $('.datatable-PCGame').DataTable(dtOverrideGlobals);
            $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });

            let visibleColumnsIndexes = null;
            $('.datatable thead').on('input', '.search', function() {
                let strict = $(this).attr('strict') || false
                let value = strict && this.value ? "^" + this.value + "$" : this.value

                let index = $(this).parent().index()
                if (visibleColumnsIndexes !== null) {
                    index = visibleColumnsIndexes[index]
                }

                table
                    .column(index)
                    .search(value, strict)
                    .draw()
            });
            table.on('column-visibility.dt', function(e, settings, column, state) {
                visibleColumnsIndexes = []
                table.columns(":visible").every(function(colIdx) {
                    visibleColumnsIndexes.push(colIdx);
                });
            })


            $('#searchInput').on('input', function() {
                var searchValue = $(this).val().trim().toLowerCase();
                var searchTitle = $('#titleRadio').is(':checked');
                var searchGenre = $('#genreRadio').is(':checked');
                var searchPost = $('#postRadio').is(':checked');

                $('.card-item').each(function() {
                    var cardTitle = $(this).find('.card-title').text().trim().toLowerCase();
                    var cardGenre = $(this).find('.card-genre').text().trim().toLowerCase();
                    var cardPost = $(this).find('.card-post').text().trim().toLowerCase();
                    var cardVisible = false;

                    if (searchTitle && cardTitle.includes(searchValue)) {
                        cardVisible = true;
                    } else if (searchGenre && cardGenre.includes(searchValue)) {
                        cardVisible = true;
                    } else if (searchPost && cardPost.includes(searchValue)) {
                        cardVisible = true;
                    }

                    // Tentukan apakah kartu harus ditampilkan atau disembunyikan berdasarkan hasil pencarian
                    $(this).toggle(cardVisible);
                });
            });


        });
    </script>
@endsection
