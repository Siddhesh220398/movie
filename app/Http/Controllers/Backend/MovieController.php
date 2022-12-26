<?php


namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Modal\Movie;
use App\Modal\Type;
use App\Modal\Genre;
use App\Modal\Country;
use App\Modal\Year;
use Auth;
use DataTables;
use DB;
use Illuminate\Http\Request;
use Session;

class MovieController extends Controller
{
    public function __construct(Movie $s)
    {
        $this->view = 'backend.movie';
        $this->route = 'movie';
        $this->viewName = 'Movie';
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $query = Movie::get();
            return Datatables::of($query)

                ->addColumn('action', function ($row) {
                    $btn = view('layout.actionbtnpermission')->with(['id' => $row->id, 'route' => 'movie'])->render();
                    return $btn;

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

                ->rawColumns(['action'])
                ->make(true);

        }

        return view('backend.movie.index');
    }

    public function create()
    {

        $data['url'] = route($this->route . '.store');
        $data['title'] = 'Add Movie';
        $data['genres'] = Genre::get();
        $data['countrys'] = Country::get();
        $data['types'] = Type::get();
        $data['years'] = Year::get();
        $data['module'] = $this->viewName;
        $data['resourcePath'] = $this->view;
        $data['resourceRoute'] = $this->route;

        return view('general.add_form')->with($data);

    }

    public function store(Request $request)
    {
//        dd($request->all());
        $movie = new Movie();
        $movie->title = $request->title;
        $movie->description = $request->description;
        $movie->short_description = $request->short_description;
        $movie->video_trailer_url = $request->video_trailer_url;
        $movie->video_url = $request->video_url;
        $movie->duration = $request->duration;
        $movie['genre_id'] = serialize($request['genre_id']);
        $movie->cast = $request->cast;
        $movie->production = $request->production;
        $movie->country_id = $request->country_id;
        $movie->imdb_rates = $request->imdb_rates;
        $movie->type = 'movies';
//        $movie->quality_ids = $request->quality_ids;
        $movie->year = $request->year_id;
        $movie->latest = $request->latest ?? 0;



        $movie->save();
        if ($movie){
            return response()->json(['status'=>'success']);
        }else{
            return response()->json(['status'=>'error']);
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Movie';
        $data['edit'] = Movie::findOrFail($id);
        $data['edit']->genre_id = unserialize($data['edit']->genre_id);
        $data['url'] = route($this->route . '.update', [$this->view => $id]);
        $data['genres'] = Genre::get();
        $data['countrys'] = Country::get();
        $data['types'] = Type::get();
        $data['years'] = Year::get();
        $data['module'] = $this->viewName;
        $data['resourcePath'] = $this->view;
        $data['resourceRoute'] = $this->route;
        return view('general.edit_form', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Movie::where('id',$id)->first();
        $data->title = $request->title;
        $data->description = $request->description;
        $data->genre_id = serialize($request['genre_id']);

//        dd($data->genre_id);
        $data->cast = $request->cast;
        $data->production = $request->production;
        $data->country_id  = $request->country_id;
        $data->duration = $request->duration;
        $data->imdb_rates = $request->imdb_rates;
        if($request->video)
        {
            $file = $request->video;
            $filename = 'video-' . rand() . '.' . $file->getClientOriginalExtension();
            $request->video->move(public_path('video'), $filename);
            $data->video = 'video/' . $filename;
        }else
        {
            $request->video = NULL;
        }
        $data->latest = $request->latest ?? 0;
        $data->type_id  = $request->type_id;
        $data->quality_ids  = $request->quality_ids;
        $data->year_id  = $request->year_id;
//        dd($data);
        $data->save();

        if ($data){
            return response()->json(['status'=>'success']);
        }else{
            return response()->json(['status'=>'error']);
        }

    }

}
