<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAnimeRequest;
use App\Http\Requests\UpdateAnimeRequest;
use App\Http\Resources\Admin\AnimeResource;
use App\Models\Anime;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AnimeApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('anime_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AnimeResource(Anime::all());
    }

    public function store(StoreAnimeRequest $request)
    {
        $anime = Anime::create($request->all());

        return (new AnimeResource($anime))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Anime $anime)
    {
        abort_if(Gate::denies('anime_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AnimeResource($anime);
    }

    public function update(UpdateAnimeRequest $request, Anime $anime)
    {
        $anime->update($request->all());

        return (new AnimeResource($anime))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Anime $anime)
    {
        abort_if(Gate::denies('anime_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $anime->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
