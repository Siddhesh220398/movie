<?php


namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Modal\Episode;
use App\Modal\Type;
use App\Modal\Genre;
use App\Modal\Country;
use App\Modal\Year;
use Auth;
use DataTables;
use DB;
use Illuminate\Http\Request;
use Session;

class EpisodeController extends Controller
{
    public function __construct(Episode $s)
    {
        $this->view = 'backend.episode';
        $this->route = 'episode';
        $this->viewName = 'Episode';
    }

    public function index(Request $request,$id)
    {
        $query = Episode::where('season_id',$id)->get();
        if ($request->ajax()) {


            return Datatables::of($query)

                ->addColumn('action', function ($row) {
                    $btn = view('layout.actionbtnpermission')->with(['id' => $row->id, 'route' => 'episode'])->render();
                    return $btn;

                })
                ->addColumn('thumbnail', function ($row) {
                    if($row->thumbnail != '')
                    {
                        return '<img src="'. url($row->thumbnail) .'" width="100px" class="img-thumbnail" />';

                    }else
                    {
                        return '';
                    }
                })
//                ->addColumn('singlecheckbox', function ($row) {
//                        $schk = view('layout.singlecheckbox')->with(['id' => $row->id , 'status'=>$row->status])->render();
//
//                    return $schk;
//
//                })
                ->setRowClass(function () {
                    return 'row-move';
                })
                ->setRowId(function ($row) {
                    return 'row-' . $row->id;
                })

                ->rawColumns(['action','thumbnail'])
                ->make(true);

        }

        return view('backend.episode.index',compact('id'));
    }

    public function create($id)
    {
        $data['url'] = route($this->route . '.store');
        $data['title'] = 'Add Episode';
        $data['module'] = $this->viewName;
        $data['resourcePath'] = $this->view;
        $data['resourceRoute'] = $this->route;
        $data['id'] = $id;

        return view('general.add_form')->with($data);

    }

    public function store(Request $request)
    {
        $episode = new Episode();
        $episode->title = $request->title;
        $episode->url = $request->url;
        $episode->season_id = $request->season_id;
        $episode->thumbnail= $request->thumbnail ? setImage($request->thumbnail,'movies-thumbnail') : null;
        $episode->save();
        if ($episode){
            return response()->json(['status'=>'success']);
        }else{
            return response()->json(['status'=>'error']);
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Episode';
        $data['edit'] = Episode::findOrFail($id);
        $data['url'] = route($this->route . '.update', [$this->view => $id]);
        $data['module'] = $this->viewName;
        $data['resourcePath'] = $this->view;
        $data['resourceRoute'] = $this->route;
        $data['season_id'] = $data['edit']->season_id;
        return view('general.edit_form', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $episode = Episode::where('id',$id)->first();
        $episode->title = $request->title;
        $episode->url = $request->url;
//        $episode->thumbnail= $request->thumbnail ? setImage($request->thumbnail,'movies-thumbnail') : null;
        if($request->thumbnail)
        {
            $episode->thumbnail=setImage($request->thumbnail,'movies-thumbnail','edit');
        }
        $episode->save();

        if ($episode){
            return response()->json(['status'=>'success']);
        }else{
            return response()->json(['status'=>'error']);
        }

    }

//    public function episode(Request $request,$id)
//    {
//        dd('v');
//        dd($request->all());
//    }

}
