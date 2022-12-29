<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Genre;
use DataTables;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function __construct(Genre $s)
    {
        $this->view = 'backend.genre';
        $this->route = 'genre';
        $this->viewName = 'Genre';
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $query = Genre::get();
            return Datatables::of($query)

                ->addColumn('action', function ($row) {
                    $btn = view('layout.actionbtnpermission')->with(['id' => $row->id, 'route' => 'genre'])->render();
                    return $btn;

                })
                ->addColumn('singlecheckbox', function ($row) {
                    $schk = view('layout.singlecheckbox')->with(['id' => $row->id , 'status'=>$row->status])->render();

                    return $schk;

                })
                ->setRowClass(function () {
                    return 'row-move';
                })
                ->setRowId(function ($row) {
                    return 'row-' . $row->id;
                })

                ->rawColumns(['action'])
                ->make(true);

        }

        return view('backend.genre.index');
    }

    public function create()
    {

        $data['url'] = route($this->route . '.store');
        $data['title'] = 'Add Genre';
        $data['module'] = $this->viewName;
        $data['resourcePath'] = $this->view;
        $data['resourceRoute'] = $this->route;
        return view('general.add_form')->with($data);

    }

    public function store(Request $request)

    {
        $genre = new Genre();
        $genre->name = $request->name;
        $genre->save();
        if ($genre){
            return response()->json(['status'=>'success']);
        }else{
            return response()->json(['status'=>'error']);
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Genre';
        $data['edit'] = Genre::findOrFail($id);
        $data['url'] = route($this->route . '.update', [$this->view => $id]);
        $data['module'] = $this->viewName;
        $data['resourcePath'] = $this->view;
        $data['resourceRoute'] = $this->route;
        return view('general.edit_form', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data =  Genre::where('id',$id)->first();
        $data->name = $request->name;

        $data->save();

        if ($data){
            return response()->json(['status'=>'success']);
        }else{
            return response()->json(['status'=>'error']);
        }

    }
}
