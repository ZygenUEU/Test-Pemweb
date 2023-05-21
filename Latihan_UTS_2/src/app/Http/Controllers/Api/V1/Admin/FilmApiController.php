<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFilmRequest;
use App\Http\Requests\UpdateFilmRequest;
use App\Http\Resources\Admin\FilmResource;
use App\Models\Film;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FilmApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('film_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new FilmResource(Film::all());
    }

    public function store(StoreFilmRequest $request)
    {
        $film = Film::create($request->all());

        return (new FilmResource($film))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Film $film)
    {
        abort_if(Gate::denies('film_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new FilmResource($film);
    }

    public function update(UpdateFilmRequest $request, Film $film)
    {
        $film->update($request->all());

        return (new FilmResource($film))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Film $film)
    {
        abort_if(Gate::denies('film_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $film->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
