<?php


namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Modal\Movie;
use App\Modal\ContinueWatching;
use App\User;
use Auth;
use DataTables;
use DB;
use Illuminate\Http\Request;
use Session;

class WatchingController extends Controller
{
    public function __construct(ContinueWatching $s)
    {
        $this->view = 'backend.watching';
        $this->route = 'watching';
        $this->viewName = 'ContinueWatching';
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $query = ContinueWatching::get();
            return Datatables::of($query)

                ->addColumn('action', function ($row) {
                    $btn = view('layout.actionbtnpermission')->with(['id' => $row->id, 'route' => 'watching'])->render();
                    return $btn;

                })
                ->addColumn('movie_id', function($row){
                    return Movie::where('id',$row->movie_id)->value('title');
                })
                ->addColumn('user_id', function($row){
                    return User::where('id',$row->user_id)->value('name');
                })
                ->setRowClass(function () {
                    return 'row-move';
                })
                ->setRowId(function ($row) {
                    return 'row-' . $row->id;
                })

                ->rawColumns(['action','movie_id','user_id'])
                ->make(true);

        }

        return view('backend.watching.index');
    }

    public function create()
    {

        $data['url'] = route($this->route . '.store');
        $data['title'] = 'Add Current Watching';
        $data['module'] = $this->viewName;
        $data['movies'] = Movie::get();
        $data['users'] = User::get();
        $data['resourcePath'] = $this->view;
        $data['resourceRoute'] = $this->route;
        return view('general.add_form')->with($data);

    }

    public function store(Request $request)

    {
        $data = new ContinueWatching();
        $data->user_id = $request->user_id;
        $data->movie_id = $request->movie_id;
        $data->duration = $request->duration;
        $data->save();
        if ($data){
            return response()->json(['status'=>'success']);
        }else{
            return response()->json(['status'=>'error']);
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Current Watching';
        $data['edit'] = ContinueWatching::findOrFail($id);
        $data['movies'] = Movie::get();
        $data['users'] = User::get();
        $data['url'] = route($this->route . '.update', [$this->view => $id]);
        $data['module'] = $this->viewName;
        $data['resourcePath'] = $this->view;
        $data['resourceRoute'] = $this->route;
        return view('general.edit_form', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = ContinueWatching::where('id',$id)->first();
        $data->user_id = $request->user_id;
        $data->movie_id = $request->movie_id;
        $data->duration = $request->duration;
        $data->save();

        if ($data){
            return response()->json(['status'=>'success']);
        }else{
            return response()->json(['status'=>'error']);
        }

    }

}
