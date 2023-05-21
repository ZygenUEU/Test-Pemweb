<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyAnimeRequest;
use App\Http\Requests\StoreAnimeRequest;
use App\Http\Requests\UpdateAnimeRequest;
use App\Models\Anime;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class AnimeController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('anime_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Anime::query()->select(sprintf('%s.*', (new Anime)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'anime_show';
                $editGate      = 'anime_edit';
                $deleteGate    = 'anime_delete';
                $crudRoutePart = 'animes';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : '';
            });
            $table->editColumn('animename', function ($row) {
                return $row->animename ? $row->animename : '';
            });
            $table->editColumn('studio', function ($row) {
                return $row->studio ? $row->studio : '';
            });
            $table->editColumn('episode', function ($row) {
                return $row->episode ? $row->episode : '';
            });
            $table->editColumn('aired', function ($row) {
                return $row->aired ? $row->aired : '';
            });
            $table->editColumn('duration', function ($row) {
                return $row->duration ? $row->duration : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.animes.index');
    }

    public function create()
    {
        abort_if(Gate::denies('anime_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.animes.create');
    }

    public function store(StoreAnimeRequest $request)
    {
        $anime = Anime::create($request->all());

        return redirect()->route('admin.animes.index');
    }

    public function edit(Anime $anime)
    {
        abort_if(Gate::denies('anime_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.animes.edit', compact('anime'));
    }

    public function update(UpdateAnimeRequest $request, Anime $anime)
    {
        $anime->update($request->all());

        return redirect()->route('admin.animes.index');
    }

    public function show(Anime $anime)
    {
        abort_if(Gate::denies('anime_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.animes.show', compact('anime'));
    }

    public function destroy(Anime $anime)
    {
        abort_if(Gate::denies('anime_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $anime->delete();

        return back();
    }

    public function massDestroy(MassDestroyAnimeRequest $request)
    {
        $animes = Anime::find(request('ids'));

        foreach ($animes as $anime) {
            $anime->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
