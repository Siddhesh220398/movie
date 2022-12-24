<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modal\Banner;
use DataTables;

class BannerController extends Controller
{
    public function __construct(Banner $s)
    {
        $this->view = 'backend.banner';
        $this->route = 'banner';
        $this->viewName = 'Banner';
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $query = Banner::get();
            return Datatables::of($query)

                ->addColumn('action', function ($row) {
                    $btn = view('layout.actionbtnpermission')->with(['id' => $row->id, 'route' => 'banner'])->render();
                    return $btn;

                })
                ->addColumn('image', function ($row) {
                    return   '<img src="'. url($row->image) .'" width="50px" class="img-thumbnail" />';

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

                ->rawColumns(['action','image'])
                ->make(true);

        }

        return view('backend.banner.index');
    }

    public function create()
    {

        $data['url'] = route($this->route . '.store');
        $data['title'] = 'Add Banner';
        $data['module'] = $this->viewName;
        $data['resourcePath'] = $this->view;
        $data['resourceRoute'] = $this->route;

        return view('general.add_form')->with($data);

    }

    public function store(Request $request)
    {
        $banner = new Banner();
        $banner->title = $request->title;
        if($request->image)
        {
            $file = $request->image;
            $filename = 'image-' . rand() . '.' . $file->getClientOriginalExtension();
            $request->image->move(public_path('image'), $filename);
            $banner->image = 'image/' . $filename;
        }else
        {
            $request->$banner = NULL;
        }
        $banner->url = $request->url;
        $banner->description = $request->description;


//        dd($banner);
        $banner->save();
        if ($banner){
            return response()->json(['status'=>'success']);
        }else{
            return response()->json(['status'=>'error']);
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Banner';
        $data['edit'] = Banner::findOrFail($id);
        $data['url'] = route($this->route . '.update', [$this->view => $id]);
        $data['module'] = $this->viewName;
        $data['resourcePath'] = $this->view;
        $data['resourceRoute'] = $this->route;
        return view('general.edit_form', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Banner::where('id',$id)->first();
        $data->title = $request->title;
        if($request->image)
        {
            $file = $request->image;
            $filename = 'image-' . rand() . '.' . $file->getClientOriginalExtension();
            $request->image->move(public_path('image'), $filename);
            $data->image = 'image/' . $filename;
        }else
        {
            $request->$data = NULL;
        }
        $data->url = $request->url;
        $data->description = $request->description;


//        dd($data);
        $data->save();

        if ($data){
            return response()->json(['status'=>'success']);
        }else{
            return response()->json(['status'=>'error']);
        }

    }
}
