<?php


namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\User;
use Auth;
use DataTables;
use DB;
use Illuminate\Http\Request;
use Session;
use function App\Http\Controllers\public_path;

class UserController extends Controller
{
    public function __construct(User $s)
    {
        $this->view = 'user';
        $this->route = 'user';
        $this->viewName = 'User';
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $query = User::latest();

            return Datatables::of($query)

            ->addColumn('role', function ($row) {

                return $row['role'] == 1 ? 'Admin' : 'User';

            })

            ->addColumn('singlecheckbox', function ($row) {
                if($row->id == 1){
                    $schk = 'Cannot Change';
                }else{
                 $schk = view('layout.singlecheckbox')->with(['id' => $row->id , 'status'=>$row->status])->render();
             }
             return $schk;

         })

            ->addColumn('action', function ($row) {
                if($row->id == 1){
                    $btn = 'Cannot Change';
                }else{
                 $btn = view('layout.actionbtnpermission')->with(['id' => $row->id, 'route' => 'user'])->render();
             }
             return $btn;

         })

            ->setRowClass(function () {
                return 'row-move';
            })
            ->setRowId(function ($row) {
                return 'row-' . $row->id;
            })
            ->rawColumns(['action','role','singlecheckbox'])
            ->make(true);

        }

        return view('user.index');
    }

    public function create()
    {

        $data['url'] = route($this->route . '.store');
        $data['title'] = 'Add User';
        $data['module'] = $this->viewName;
        $data['resourcePath'] = $this->view;
        $data['resourceRoute'] = $this->route;
        return view('general.add_form')->with($data);

    }

    public function store(Request $request)

    {
        $user = new User();
        $user->name = $request->name;
        $user->email  = $request->email ;
        $user->password = bcrypt($request->password);
        $user->show_password = $request->password;
        $user->number = $request->number;
        if($request->image)
        {
            $file = $request->image;
            $filename = 'profile-' . rand() . '.' . $file->getClientOriginalExtension();
            $request->image->move(public_path('profile'), $filename);
            $user->image = 'profile/' . $filename;
        }else
        {
            $request->image = NULL;
        }
        $user->gender = $request->gender ?? 0;
        $user->role = $request->role;
        $user->status = $request->status;
        $user->save();
        if ($user){
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
        $data['resourceRoute'] = $this->route;
        return view('general.edit_form', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data =  User::where('id',$id)->first();
        $data->name = $request->name;
        $data->email  = $request->email;
        $data->password = $request->password ?? 0;
        $data->show_password = $request->password;
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
        $data->status = $request->status;
        $data->save();

        if ($data){
            return response()->json(['status'=>'success']);
        }else{
            return response()->json(['status'=>'error']);
        }

    }

}
