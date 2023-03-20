<?php

namespace App\Http\Controllers;

use DataTables;
use Redirect;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect as FacadesRedirect;

class TypeController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.types.type');
    }

    public function datatable(Request $request)
    {
        if ($request->ajax()) {
            $data = Type::select('*');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $edit =  route('type.editType',$row->id) ;
                    $actionBtn = '<a href=" ' . $edit . '" class="edit btn btn-success btn-sm m-1">تعديل</a>';
                    $actionBtn .= '<a href="javascript:void(0)" value="' . $row->id . '" class="delete btn btn-danger btn-sm">حذف</a>';
                    return $actionBtn;
                })
                ->filter(
                    function ($instance) use ($request) {
                        if (request()->has('name')) {
                            $instance->where(function ($w) use ($request) {
                                $name = $request->get('name');
                                $w->orWhere('type', 'LIKE', "%$name%");
                            });
                        }
                    }
                )
                ->rawColumns(['action'])
                ->make(true);
        }
    }
    public function create(){
        return view('admin.types.add');
    }
    public function store(Request $request){
        $request->validate([
            'typeName'=>'required',
           

        ],[
            'typeName'=>'اسم المشروع مطلوب',
            
        ]);
        $type= new Type();
        $type->type = $request->typeName;
       
        $type->save();
        return FacadesRedirect::route('type.type');
    }
    public function delete(Request $request){
        $p = Type::findOrFail($request->id);
        $y = $p->delete();
        if($y){
            return response()->json(['err' => false , 'msg' => 'deleted done'],200);
        }else{
            return response()->json(['err' => true , 'msg' => 'pro'],200);
        }
    }
    public function edit($id){

        $type =  Type::find($id);
        return view('admin.types.update', ['type'=>$type]);
    }
    public function update(Request $request,$id){
     
        $request->validate([
            'typeName'=>'required',
            

        ],[
            'typeName'=>'اسم المشروع مطلوب',
            
        ]);
        $type =  Type::find($request->id);
       
        $type->type = $request->typeName;
       
        $type->save();
        return FacadesRedirect::route('type.type');
    }
}
