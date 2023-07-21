<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePCGameRequest;
use App\Http\Requests\UpdatePCGameRequest;
use App\Http\Resources\Admin\PCGameResource;
use App\Models\PCGame;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PCGameApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('pcgame_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PCGameResource(PCGame::all());
    }

    public function store(StorePCGameRequest $request)
    {
        $pcgame = PCGame::create($request->all());

        return (new PCGameResource($pcgame))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(PCGame $pcgame)
    {
        abort_if(Gate::denies('pcgame_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PCGameResource($pcgame);
    }

    public function update(UpdatePCGameRequest $request, PCGame $pcgame)
    {
        $pcgame->update($request->all());

        return (new PCGameResource($pcgame))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(PCGame $pcgame)
    {
        abort_if(Gate::denies('pcgame_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pcgame->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
