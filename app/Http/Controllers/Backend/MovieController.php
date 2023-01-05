<?php


namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Movie;
use App\Model\MovieImage;
use App\Model\Type;
use App\Model\Genre;
use App\Model\Country;
use App\Model\Year;
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

            $query = Movie::where('type','movies')->get();
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
        $movie = new Movie();
        $movie->title = $request->title;
        $movie->description = $request->description;
        $movie->short_description = $request->short_description;
        $movie->video_trailer_url = $request->video_trailer_url;
        $movie->video_url = $request->video_url;
        $movie->duration = $request->duration;
        $movie->cast = $request->cast;
        $movie->production = $request->production;
        $movie->country_id = $request->country_id;
        $movie->imdb_rates = $request->imdb_rates;
        $movie->type = 'movies';

        $movie->year = $request->year_id;
        $movie->latest = $request->latest ?? 0;
        $movie->thumbnail= $request->thumbnail ? setImage($request->thumbnail,'movies-thumbnail') : null;
        $movie->save();
        if($request->image)
        {
            foreach ($request->image as $img)
            {
                $movie->posters()->create(['image'=>setImage($img,'movies-poster') ]);
            }
        }
        foreach ($request['genre_id'] as $genre_id){
            $movie->movieGenre()->create(['genre_id'=>$genre_id ]);
        }

        if ($movie){
            return response()->json(['status'=>'success']);
        }else{
            return response()->json(['status'=>'error']);
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Movie';
        $data['edit'] = Movie::with('posters','movieGenre')->findOrFail($id);

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
        $movie = Movie::where('id',$id)->first();
        $movie->title = $request->title;
        $movie->description = $request->description;
        $movie->short_description = $request->short_description;
        $movie->video_trailer_url = $request->video_trailer_url;
        $movie->video_url = $request->video_url;
        $movie->duration = $request->duration;

        $movie->cast = $request->cast;
        $movie->production = $request->production;
        $movie->country_id = $request->country_id;
        $movie->imdb_rates = $request->imdb_rates;
        $movie->type = 'movies';
//        $movie->quality_ids = $request->quality_ids;
        $movie->year = $request->year_id;
        $movie->latest = $request->latest ?? 0;
        if($request->image)
        {
            foreach ($request->image as $img)
            {
                $movie->posters()->create(['image'=>setImage($img,'movies-poster') ]);
            }
        }
       if($request->thumbnail)
        {
            $movie->thumbnail=setImage($request->thumbnail,'movies-thumbnail','edit');
        }
        $movie->movieGenre()->delete();
        foreach ($request['genre_id'] as $genre_id){
            $movie->movieGenre()->create(['genre_id'=>$genre_id ]);
        }


        $movie->save();

        if ($movie){
            return response()->json(['status'=>'success']);
        }else{
            return response()->json(['status'=>'error']);
        }

    }

    public function episode(Request $request,$id)
    {
        dd('v');
        dd($request->all());
    }

    public function deleteImage(Request  $request)
    {
        $posters = MovieImage::findOrFail($request->id)->delete();
        if ($posters){
            return response()->json(['status'=>'success']);
        }else{
            return response()->json(['status'=>'error']);
        }
    }

}
