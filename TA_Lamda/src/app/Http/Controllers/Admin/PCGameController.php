<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPCGameRequest;
use App\Http\Requests\StorePCGameRequest;
use App\Http\Requests\UpdatePCGameRequest;
use App\Models\PCGame;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class PCGameController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('pcgame_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        

        if ($request->ajax()) {
            $query = PCGame::query()->select(sprintf('%s.*', (new PCGame)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'pcgame_show';
                $editGate      = 'pcgame_edit';
                $deleteGate    = 'pcgame_delete';
                $crudRoutePart = 'pcgames';

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
            $table->editColumn('postedby', function ($row) {
                return $row->postedby ? $row->postedby : '';
            });
            $table->editColumn('gamename', function ($row) {
                return $row->gamename ? $row->gamename : '';
            });
            $table->editColumn('developer', function ($row) {
                return $row->developer ? $row->developer : '';
            });
            $table->editColumn('download_url', function ($row) {
                return $row->download_url ? $row->download_url : '';
            });
            $table->editColumn('thumbnail_url', function ($row) {
                return $row->thumbnail_url ? $row->thumbnail_url : '';
            });
            $table->editColumn('genre', function ($row) {
                return $row->genre ? $row->genre : '';
            });
            $table->editColumn('about', function ($row) {
                return $row->about ? $row->about : '';
            });
            $table->editColumn('screenshot_url_1', function ($row) {
                return $row->screenshot_url_1 ? $row->screenshot_url_1 : '';
            });
            $table->editColumn('screenshot_url_2', function ($row) {
                return $row->screenshot_url_2 ? $row->screenshot_url_2 : '';
            });
            $table->editColumn('screenshot_url_3', function ($row) {
                return $row->screenshot_url_3 ? $row->screenshot_url_3 : '';
            });
            $table->editColumn('screenshot_url_4', function ($row) {
                return $row->screenshot_url_4 ? $row->screenshot_url_4 : '';
            });
            $table->editColumn('video_url', function ($row) {
                return $row->video_url ? $row->video_url : '';
            });
            $table->editColumn('publish_date', function ($row) {
                return $row->publish_date ? $row->publish_date : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        $pcgames = PCGame::all();
        return view('admin.pcgames.index', compact('pcgames'));
        
        //return view('admin.pcgames.index');

    }

    public function create()
    {
        abort_if(Gate::denies('pcgame_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pcgames.create');
    }

    public function store(StorePCGameRequest $request)
    {
        $pcgame = PCGame::create($request->all());

        return redirect()->route('admin.pcgames.index');
    }

    public function edit(PCGame $pcgame)
    {
        abort_if(Gate::denies('pcgame_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pcgames.edit', compact('pcgame'));
    }

    public function update(UpdatePCGameRequest $request, PCGame $pcgame)
    {
        $pcgame->update($request->all());

        return redirect()->route('admin.pcgames.index');
    }

    public function show(PCGame $pcgame)
    {
        abort_if(Gate::denies('pcgame_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.pcgames.show', compact('pcgame'));
    }

    public function destroy(PCGame $pcgame)
    {
        abort_if(Gate::denies('pcgame_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pcgame->delete();

        return back();
    }

    public function massDestroy(MassDestroyPCGameRequest $request)
    {
        $pcgames = PCGame::find(request('ids'));

        foreach ($pcgames as $pcgame) {
            $pcgame->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function indexAPI(){
        return PCGame::all();
    }

    public function storeAPI(Request $request){

        $request->validate([
            'postedby' => 'required',
            'gamename' => 'required',
            'developer' => 'required',
            'download_url' => 'required',
            'thumbnail_url' => 'required',
            'genre' => 'required',
            'about' => 'required',
            'screenshot_url_1' => 'required',
            'screenshot_url_2' => 'required',
            'screenshot_url_3' => 'required',
            'screenshot_url_4' => 'required',
            'video_url' => 'required',
            'publish_date' => 'required'
        ]);

        return PCGame::create($request->all());
    }

    public function showAPI($id){
        return PCGame::find($id);
    }

    public function updateAPI(Request $request, $id){
        $pcgame = PCGame::find($id);
        $pcgame->update($request->all());
        return $pcgame;
    }

    public function destroyAPI($id){
        return PCGame::destroy($id);
    }

    public function searchAPI($gamename){
        return PCGame::where('gamename', 'like', '%'.$gamename.'%')->get();
    }
}
