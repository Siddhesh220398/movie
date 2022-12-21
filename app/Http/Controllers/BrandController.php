<?php


namespace App\Http\Controllers;

use App\Modal\Brand;
use Session;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use DataTables;
use DB;
use Auth;

class BrandController extends Controller
{
    public function __construct(Brand $s)
    {
        $this->view = 'brand';
        $this->route = 'brand';
        $this->viewName = 'Brand';
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $query = Brand::get();
            return Datatables::of($query)

                ->addColumn('action', function ($row) {
                    $btn = view('layout.actionbtnpermission')->with(['id' => $row->id, 'route' => 'brand'])->render();
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

        return view('brand.index');
    }

    public function create()
    {

        $data['url'] = route($this->route . '.store');
        $data['title'] = 'Add Brand';
        $data['module'] = $this->viewName;
        $data['resourcePath'] = $this->view;

        return view('general.add_form')->with($data);

    }

    public function store(Request $request)

    {
        $brand = new Brand();
        $brand->name = $request->name;
        $brand->save();
        if ($brand){
            return response()->json(['status'=>'success']);
        }else{
            return response()->json(['status'=>'error']);
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Edit User';
        $data['edit'] = User::findOrFail($id);
        $data['url'] = route($this->route . '.update', [$this->view => $id]);
        $data['module'] = $this->viewName;
        $data['resourcePath'] = $this->view;

        return view('general.edit_form', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data =  User::where('id',$id)->first();
        $data->name = $request->name;
        $data->email  = $request->email;
        $data->password = $request->password ?? 0;
        $data->show_password = $request->password;
        $data->number = $request->number;
        if($request->image)
        {
            $file = $request->image;
            $filename = 'profile-' . rand() . '.' . $file->getClientOriginalExtension();
            $request->image->move(public_path('profile'), $filename);
            $data->image = 'profile/' . $filename;
        }else
        {
            $request->image = NULL;
        }
        $data->role = $request->role;
        $data->gender = $request->gender;
        $data->status = $request->status;
        $data->save();

        if ($data){
            return response()->json(['status'=>'success']);
        }else{
            return response()->json(['status'=>'error']);
        }

    }

}
