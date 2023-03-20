<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Developer;
use DataTables;
use Redirect;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect as FacadesRedirect;

class DeveloperController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.developers.developer');
    }

    public function datatable(Request $request)
    {
        if ($request->ajax()) {
            $data = Developer::select('*');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $edit =  route('dev.editDeveloper',$row->id) ;
                    $actionBtn = '<a href=" ' . $edit . '" class="edit btn btn-success btn-sm m-1">تعديل</a>';
                    $actionBtn .= '<a href="javascript:void(0)" value="' . $row->id . '" class="delete btn btn-danger btn-sm">حذف</a>';
                    return $actionBtn;
                })
                ->filter(
                    function ($instance) use ($request) {
                        if (request()->has('name')) {
                            $instance->where(function ($w) use ($request) {
                                $name = $request->get('name');
                                $w->orWhere('companyName', 'LIKE', "%$name%");
                            });
                        }
                    }
                )
                ->rawColumns(['action'])
                ->make(true);
        }
    }
    public function create(){
        return view('admin.developers.add');
    }
    public function store(Request $request){
        $request->validate([
            'developerName'=>'required',
            'name'=>'required',
            'phone'=>'required',
            'image' => 'required'
        ],[
            'developerName'=>'اسم الشركه مطلوب',
            'name'=>' اسم المطور مطلوب ',
            'phone'=>'رقم هاتف المطور مطلوب  ',
            'image' => 'الصوره او اللوجو مطلوب'
        ]);
        $dev= new Developer();
        $dev->companyName = $request->developerName;
        $dev->name = $request->name;
        $dev->phone = $request->phone;

        $file=$request->file('image');
        $filename=$file->getClientOriginalName();
        $file->move('images/dev',$filename);
        $dev->image = $filename;
       
        $dev->save();
        return FacadesRedirect::route('dev.developer');
    }
    public function delete(Request $request){
        $p = Developer::findOrFail($request->id);
        $y = $p->delete();
        if($y){
            return response()->json(['err' => false , 'msg' => 'deleted done'],200);
        }else{
            return response()->json(['err' => true , 'msg' => 'pro'],200);
        }
    }
    public function edit($id){

        $dev =  Developer::find($id);
        return view('admin.developers.update', ['dev'=>$dev]);
    }
    public function update(Request $request,$id){
     
        $request->validate([
            'companyName'=>'required',
            'name'=>'required',
            'phone'=>'required',
            

        ],[
            'companyName'=>'اسم الشركه مطلوب',
            'name'=>' اسم المطور مطلوب ',
            'phone'=>'رقم هاتف المطور مطلوب  ',
           
            
        ]);
        $dev =  Developer::find($id);
        $dev->companyName = $request->companyName;
        $dev->name = $request->name;
        $dev->phone = $request->phone;

        if($request->hasfile('image'))
        {
            if (File::exists('images/dev/' .$dev->image)) 
            {
                File::delete('images/dev/'.$dev->image);
            }
            $file=$request->file('image');
            $filename=$file->getClientOriginalName();
            $file->move('images/dev',$filename);
            $dev->image=$filename ;
        }
        $dev->save();
        return FacadesRedirect::route('dev.developer');
    }
}
