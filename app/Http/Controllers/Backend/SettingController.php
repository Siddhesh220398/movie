<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modal\Setting;
use DataTables;

class SettingController extends Controller
{
    public function __construct(Setting $s)
    {
        $this->view = 'backend.setting';
        $this->route = 'setting';
        $this->viewName = 'Setting';
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $query = Setting::get();
            return Datatables::of($query)

                ->addColumn('action', function ($row) {
                    $btn = view('layout.actionbtnpermission')->with(['id' => $row->id, 'route' => 'setting'])->render();
                    return $btn;

                })
                ->addColumn('logo', function ($row) {
                  return   '<img src="'. url($row->logo) .'" width="50px" class="img-thumbnail" />';

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

                ->rawColumns(['action','logo'])
                ->make(true);

        }

        return view('backend.setting.index');
    }

    public function create()
    {

        $data['url'] = route($this->route . '.store');
        $data['title'] = 'Add Setting';
        $data['module'] = $this->viewName;
        $data['resourcePath'] = $this->view;
        $data['resourceRoute'] = $this->route;

        return view('general.add_form')->with($data);

    }

    public function store(Request $request)
    {
        $setting = new Setting();
        $setting->website_name = $request->website_name;
        if($request->logo)
        {
            $file = $request->logo;
            $filename = 'logo-' . rand() . '.' . $file->getClientOriginalExtension();
            $request->logo->move(public_path('logo'), $filename);
            $setting->logo = 'logo/' . $filename;
        }else
        {
            $request->$setting = NULL;
        }
        $setting->website_email = $request->website_email;
        $setting->privacy_policy = $request->privacy_policy;
        $setting->facebook_url = $request->facebook_url;
        $setting->twitter_url = $request->twitter_url;
        $setting->reddit_url = $request->reddit_url;
        $setting->instagram_url = $request->instagram_url;
        $setting->telegram_url = $request->telegram_url;
        $setting->youtube_url = $request->youtube_url;

//        dd($setting);
        $setting->save();
        if ($setting){
            return response()->json(['status'=>'success']);
        }else{
            return response()->json(['status'=>'error']);
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Setting';
        $data['edit'] = Setting::findOrFail($id);
        $data['url'] = route($this->route . '.update', [$this->view => $id]);
        $data['module'] = $this->viewName;
        $data['resourcePath'] = $this->view;
        $data['resourceRoute'] = $this->route;
        return view('general.edit_form', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Setting::where('id',$id)->first();
        $data->website_name = $request->website_name;
        if($request->logo)
        {
            $file = $request->logo;
            $filename = 'logo-' . rand() . '.' . $file->getClientOriginalExtension();
            $request->logo->move(public_path('logo'), $filename);
            $data->logo = 'logo/' . $filename;
        }else
        {
            $request->$data = NULL;
        }
        $data->website_email = $request->website_email;
        $data->privacy_policy = $request->privacy_policy;
        $data->facebook_url = $request->facebook_url;
        $data->twitter_url = $request->twitter_url;
        $data->reddit_url = $request->reddit_url;
        $data->instagram_url = $request->instagram_url;
        $data->telegram_url = $request->telegram_url;
        $data->youtube_url = $request->youtube_url;

//        dd($data);
        $data->save();

        if ($data){
            return response()->json(['status'=>'success']);
        }else{
            return response()->json(['status'=>'error']);
        }

    }
}
