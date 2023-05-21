<?php

namespace App\Http\Controllers\Admin;

use App\Models\Film;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyFilmRequest;
use App\Http\Requests\StoreFilmRequest;
use App\Http\Requests\UpdateFilmRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        abort_if(Gate::denies('film_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Film::query()->select(sprintf('%s.*', (new Film)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'film_show';
                $editGate      = 'film_edit';
                $deleteGate    = 'film_delete';
                $crudRoutePart = 'films';

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
            $table->editColumn('filmname', function ($row) {
                return $row->filmname ? $row->filmname : '';
            });
            $table->editColumn('director', function ($row) {
                return $row->director ? $row->director : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.films.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        abort_if(Gate::denies('film_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.films.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFilmRequest $request)
    {
        $film = Film::create($request->all());

        return redirect()->route('admin.films.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Film $film)
    {
        abort_if(Gate::denies('film_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.films.show', compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Film $film)
    {
        abort_if(Gate::denies('film_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.films.edit', compact('film'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFilmRequest $request, Film $film)
    {
        $film->update($request->all());

        return redirect()->route('admin.films.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Film $film)
    {
        abort_if(Gate::denies('film_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $film->delete();

        return back();
    }

    public function massDestroy(MassDestroyFilmRequest $request)
    {
        $films = Film::find(request('ids'));

        foreach ($films as $film) {
            $film->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
