<?php

namespace App\Http\Controllers\Backend;

use App\Model\Country;
use App\Model\Genre;
use App\Model\Movie;
use App\Model\Season;
use App\Model\Type;
use App\Model\Year;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DataTables;
class WebSeriesController extends Controller
{
    public function __construct(Movie $s)
    {
        $this->view = 'backend.web-series';
        $this->route = 'web-series';
        $this->viewName = 'Web Series';
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {

            $query = Movie::where('type','web-series')->get();
            return Datatables::of($query)

                ->addColumn('action', function ($row) {
                    $btn = view('layout.actionbtnpermission')->with(['id' => $row->id, 'route' => $this->route])->render();
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

        return view('backend.web-series.index');
    }

    public function create()
    {

        $data['url'] = route($this->route . '.store');
        $data['title'] = 'Add Web Series';
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

        $movie->cast = $request->cast;
        $movie->production = $request->production;
        $movie->country_id = $request->country_id;
        $movie->imdb_rates = $request->imdb_rates;
        $movie->type = 'web-series';
//        $movie->quality_ids = $request->quality_ids;
        $movie->year = $request->year_id;
        $movie->latest = $request->latest ?? 0;
        $movie->save();
        if($request->image)
        {
            foreach ($request->image as $img)
            {
                $movie->posters()->create(['image'=>setImage($img,'web-series-poster') ]);
            }
        }
        foreach ($request['genre_id'] as $genre_id){
            $movie->movieGenre()->create(['genre_id'=>$genre_id ]);
        }

        $movie->thumbnail= $request->thumbnail ? setImage($request->thumbnail,'web-series-thumbnail') : null;


        if ($movie){
            return response()->json(['status'=>'success']);
        }else{
            return response()->json(['status'=>'error']);
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Web-Series';
        $data['title2'] = 'Seasons';
        $data['edit'] = Movie::where('id',$id)->with('seasons')->first();
        $data['url'] = route($this->route . '.update', [$this->view => $id]);
        $data['genres'] = Genre::get();
        $data['countrys'] = Country::get();
        $data['types'] = Type::get();
        $data['years'] = Year::get();
        $data['module'] = $this->viewName;
        $data['resourcePath'] = $this->view;
        $data['resourceRoute'] = $this->route;
        return view('backend.web-series.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
//        dd($request->all());
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
        $movie->type = 'web-series';
//        $movie->quality_ids = $request->quality_ids;
        $movie->year = $request->year_id;
        $movie->latest = $request->latest ?? 0;
        $movie->save();

        if($request->image)
        {
            foreach ($request->image as $img)
            {
                $movie->posters()->create(['image'=>setImage($img,'web-series-poster') ]);
            }
        }

        $movie->movieGenre()->delete();
        foreach ($request['genre_id'] as $genre_id){
            $movie->movieGenre()->create(['genre_id'=>$genre_id ]);
        }
        if($request->thumbnail)
        {
            $movie->thumbnail=setImage($request->thumbnail,'web-series-thumbnail','edit');
        }


        if ($movie){
            return response()->json(['status'=>'success']);
        }else{
            return response()->json(['status'=>'error']);
        }

    }

    public function episode(Request $request)
    {
        $c_s= Season::where('movie_id',$request->movie_id)->count('id');
        $c_s +=1;
        $season = new Season();
        $season->movie_id = $request->movie_id;
        $season->title = 'Season-'.$c_s;
        $season->save();
        return redirect()->route('web-series.edit',$request->movie_id);
    }

}
