<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyGameRequest;
use App\Http\Requests\StoreGameRequest;
use App\Http\Requests\UpdateGameRequest;
use App\Models\Game;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class GameController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('game_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Game::query()->select(sprintf('%s.*', (new Game)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'game_show';
                $editGate      = 'game_edit';
                $deleteGate    = 'game_delete';
                $crudRoutePart = 'games';

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
            $table->editColumn('gamename', function ($row) {
                return $row->gamename ? $row->gamename : '';
            });
            $table->editColumn('developer', function ($row) {
                return $row->developer ? $row->developer : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.games.index');
    }

    public function create()
    {
        abort_if(Gate::denies('game_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.games.create');
    }

    public function store(StoreGameRequest $request)
    {
        $game = Game::create($request->all());

        return redirect()->route('admin.games.index');
    }

    public function edit(Game $game)
    {
        abort_if(Gate::denies('game_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.games.edit', compact('game'));
    }

    public function update(UpdateGameRequest $request, Game $game)
    {
        $game->update($request->all());

        return redirect()->route('admin.games.index');
    }

    public function show(Game $game)
    {
        abort_if(Gate::denies('Game_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.Games.show', compact('Game'));
    }

    public function destroy(Game $Game)
    {
        abort_if(Gate::denies('Game_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $Game->delete();

        return back();
    }

    public function massDestroy(MassDestroyGameRequest $request)
    {
        $games = Game::find(request('ids'));

        foreach ($games as $game) {
            $game->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
