<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyMobileGameRequest;
use App\Http\Requests\StoreMobileGameRequest;
use App\Http\Requests\UpdateMobileGameRequest;
use App\Models\MobileGame;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class MobileGameController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('mobilegame_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = MobileGame::query()->select(sprintf('%s.*', (new MobileGame)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'mobilegame_show';
                $editGate      = 'mobilegame_edit';
                $deleteGate    = 'mobilegame_delete';
                $crudRoutePart = 'mobilegames';

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

        $mobilegames = MobileGame::all();
        return view('admin.mobilegames.index', compact('mobilegames'));
        
        //return view('admin.pcgames.index');

    }

    public function create()
    {
        abort_if(Gate::denies('mobilegame_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.mobilegames.create');
    }

    public function store(StoreMobileGameRequest $request)
    {
        $mobilegame = MobileGame::create($request->all());

        return redirect()->route('admin.mobilegames.index');
    }

    public function edit(MobileGame $mobilegame)
    {
        abort_if(Gate::denies('mobilegame_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.mobilegames.edit', compact('mobilegame'));
    }

    public function update(UpdateMobileGameRequest $request, MobileGame $mobilegame)
    {
        $mobilegame->update($request->all());

        return redirect()->route('admin.mobilegames.index');
    }

    public function show(MobileGame $mobilegame)
    {
        abort_if(Gate::denies('mobilegame_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.mobilegames.show', compact('mobilegame'));
    }

    public function destroy(MobileGame $mobilegame)
    {
        abort_if(Gate::denies('mobilegame_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $mobilegame->delete();

        return back();
    }

    public function massDestroy(MassDestroyMobileGameRequest $request)
    {
        $mobilegames = MobileGame::find(request('ids'));

        foreach ($mobilegames as $mobilegame) {
            $mobilegame->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function indexAPI(){
        return MobileGame::all();
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

        return MobileGame::create($request->all());
    }

    public function showAPI($id){
        return MobileGame::find($id);
    }

    public function updateAPI(Request $request, $id){
        $mobilegame = MobileGame::find($id);
        $mobilegame->update($request->all());
        return $mobilegame;
    }

    public function destroyAPI($id){
        return MobileGame::destroy($id);
    }

    public function searchAPI($gamename){
        return MobileGame::where('gamename', 'like', '%'.$gamename.'%')->get();
    }
}
