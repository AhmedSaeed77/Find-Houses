<?php

namespace App\Http\Controllers;
use DataTables;
use Redirect;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect as FacadesRedirect;

class StatusController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.status.status');
    }

    public function datatable(Request $request)
    {
        if ($request->ajax()) {
            $data = Status::select('*');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $edit =  route('status.editStatus',$row->id) ;
                    $actionBtn = '<a href=" ' . $edit . '" class="edit btn btn-success btn-sm m-1">تعديل</a>';
                    $actionBtn .= '<a href="javascript:void(0)" value="' . $row->id . '" class="delete btn btn-danger btn-sm">حذف</a>';
                    return $actionBtn;
                })
                ->filter(
                    function ($instance) use ($request) {
                        if (request()->has('name')) {
                            $instance->where(function ($w) use ($request) {
                                $name = $request->get('name');
                                $w->orWhere('name', 'LIKE', "%$name%");
                            });
                        }
                    }
                )
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function create()
    {
        return view('admin.status.add');
    }

    public function store(Request $request)
    {
        $request->validate([

            'name'=>'required',
        ],[

            'name'=>'اسم الحاله مطلوب',
        ]);
        $st= new Status();
        $st->name = $request->name;
        $st->save();
        return FacadesRedirect::route('status.status');
    }

    public function delete(Request $request){
        $st = Status::findOrFail($request->id);
        $y = $st->delete();
        if($y){
            return response()->json(['err' => false , 'msg' => 'deleted done'],200);
        }else{
            return response()->json(['err' => true , 'msg' => 'pro'],200);
        }
    }
    public function edit($id){

        $st =  Status::find($id);
        return view('admin.status.update', ['st'=>$st]);
    }
    public function update(Request $request,$id){
     
        $request->validate([

            'name'=>'required',
        ],[

            'name'=>'اسم الحاله مطلوب',
        ]);
        $st =  Status::find($request->id);
       
        $st->name = $request->name;
       
        $st->save();
        return FacadesRedirect::route('status.status');
    }
}
