<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Type;
use DataTables;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function __construct(Type $s)
    {
        $this->view = 'backend.type';
        $this->route = 'type';
        $this->viewName = 'Type';
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $query = Type::get();
            return Datatables::of($query)

                ->addColumn('action', function ($row) {
                    $btn = view('layout.actionbtnpermission')->with(['id' => $row->id, 'route' => 'type'])->render();
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

        return view('backend.type.index');
    }

    public function create()
    {

        $data['url'] = route($this->route . '.store');
        $data['title'] = 'Add Type';
        $data['module'] = $this->viewName;
        $data['resourcePath'] = $this->view;
        $data['resourceRoute'] = $this->route;
        return view('general.add_form')->with($data);

    }

    public function store(Request $request)

    {
        $type = new Type();
        $type->name = $request->name;
        $type->save();
        if ($type){
            return response()->json(['status'=>'success']);
        }else{
            return response()->json(['status'=>'error']);
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Type';
        $data['edit'] = Type::findOrFail($id);
        $data['url'] = route($this->route . '.update', [$this->view => $id]);
        $data['module'] = $this->viewName;
        $data['resourcePath'] = $this->view;
        $data['resourceRoute'] = $this->route;
        return view('general.edit_form', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data =  Type::where('id',$id)->first();
        $data->name = $request->name;

        $data->save();

        if ($data){
            return response()->json(['status'=>'success']);
        }else{
            return response()->json(['status'=>'error']);
        }

    }
}
