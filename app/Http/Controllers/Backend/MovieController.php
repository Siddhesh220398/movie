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
        $this->view = 'movie';
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

        return view('movie.index');
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

        return view('general.add_form')->with($data);

    }

    public function store(Request $request)
    {
        $movie = new Movie();
        $movie->title = $request->title;
        $movie->description = $request->description;
        $movie->genre_id = $request->genre_id;
        $movie->cast = $request->cast;
        $movie->production = $request->production;
        $movie->country_id = $request->country_id;
        $movie->duration = $request->duration;
        $movie->imdb_rates = $request->imdb_rates;
        $movie->type_id = $request->type_id;
        $movie->quality_ids = $request->quality_ids;
        $movie->year_id = $request->year_id;
        $movie->latest = $request->latest ?? 0;
        if($request->video)
        {
            $file = $request->video;
            $filename = 'video-' . rand() . '.' . $file->getClientOriginalExtension();
            $request->video->move(public_path('video'), $filename);
            $movie->video = 'video/' . $filename;
        }else
        {
            $request->$movie = NULL;
        }
//        dd($movie);
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
        $data['url'] = route($this->route . '.update', [$this->view => $id]);
        $data['genres'] = Genre::get();
        $data['countrys'] = Country::get();
        $data['types'] = Type::get();
        $data['years'] = Year::get();
        $data['module'] = $this->viewName;
        $data['resourcePath'] = $this->view;

        return view('general.edit_form', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Movie::where('id',$id)->first();
        $data->title = $request->title;
        $data->description = $request->description;
        $data->genre_id = $request->genre_id;
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
