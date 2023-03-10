<?php


namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Year;
use Auth;
use DataTables;
use DB;
use Illuminate\Http\Request;
use Session;

class YearController extends Controller
{
    public function __construct(Year $s)
    {
        $this->view = 'backend.year';
        $this->route = 'year';
        $this->viewName = 'Year';
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $query = Year::get();
            return Datatables::of($query)

                ->addColumn('action', function ($row) {
                    $btn = view('layout.actionbtnpermission')->with(['id' => $row->id, 'route' => 'year'])->render();
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

                ->rawColumns(['action','singlecheckbox'])
                ->make(true);

        }

        return view('backend.year.index');
    }

    public function create()
    {

        $data['url'] = route($this->route . '.store');
        $data['title'] = 'Add Year';
        $data['module'] = $this->viewName;
        $data['resourcePath'] = $this->view;
        $data['resourceRoute'] = $this->route;
        return view('general.add_form')->with($data);

    }

    public function store(Request $request)

    {
        $year = new Year();
        $year->name = $request->name;
        $year->save();
        if ($year){
            return response()->json(['status'=>'success']);
        }else{
            return response()->json(['status'=>'error']);
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Year';
        $data['edit'] = Year::findOrFail($id);
        $data['url'] = route($this->route . '.update', [$this->view => $id]);
        $data['module'] = $this->viewName;
        $data['resourcePath'] = $this->view;
        $data['resourceRoute'] = $this->route;
        return view('general.edit_form', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Year::where('id',$id)->first();
        $data->name = $request->name;
        $data->save();

        if ($data){
            return response()->json(['status'=>'success']);
        }else{
            return response()->json(['status'=>'error']);
        }

    }

}
