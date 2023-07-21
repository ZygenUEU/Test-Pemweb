<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMobileGameRequest;
use App\Http\Requests\UpdateMobileGameRequest;
use App\Http\Resources\Admin\MobileGameResource;
use App\Models\MobileGame;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MobileGameApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('mobilegame_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new MobileGameResource(MobileGame::all());
    }

    public function store(StoreMobileGameRequest $request)
    {
        $mobilegame = MobileGame::create($request->all());

        return (new MobileGameResource($mobilegame))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(MobileGame $mobilegame)
    {
        abort_if(Gate::denies('mobilegame_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new MobileGameResource($mobilegame);
    }

    public function update(UpdateMobileGameRequest $request, MobileGame $mobilegame)
    {
        $mobilegame->update($request->all());

        return (new MobileGameResource($mobilegame))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(MobileGame $mobilegame)
    {
        abort_if(Gate::denies('mobilegame_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $mobilegame->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
