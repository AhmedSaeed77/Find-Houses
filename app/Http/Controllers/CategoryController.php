<?php

namespace App\Http\Controllers;

use App\Models\Category;
use DataTables;
use Redirect;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect as FacadesRedirect;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.categories.category');
    }

    public function datatable(Request $request)
    {
        if ($request->ajax()) {
            $data = Category::select('*');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $edit =  route('cat.editCategory',$row->id) ;
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
    public function create(){
        return view('admin.categories.add');
    }
    public function store(Request $request){
        $request->validate([
            'categoryName'=>'required',
            'from'=>'required',
            'to'=>'required',

        ],[
            'categoryName'=>'اسم المشروع مطلوب',
            'categoryName'=>'الحد الادني مطلوب',
            'categoryName'=>'الحد الاقصي مطلوب',
            
        ]);
        $cat= new Category();
        $cat->name = $request->categoryName;
        $cat->from = $request->from;
        $cat->to = $request->to;
       
        $cat->save();
        return FacadesRedirect::route('cat.category');
    }
    public function deletex(Request $request)
    {
        $cat = Category::findOrFail($request->id);
        //dd($cat);
        $y = $cat->delete();
        if($y){
            return response()->json(['err' => false , 'msg' => 'deleted done'],200);
        }else{
            return response()->json(['err' => true , 'msg' => 'pro'],200);
        }
    }
    public function edit($id){

        $cat =  Category::find($id);
        return view('admin.categories.update', ['cat'=>$cat]);
    }
    public function update(Request $request,$id){
     
        $request->validate([
            'categoryName'=>'required',
            'from'=>'required',
            'to'=>'required',

        ],[
            'categoryName'=>'اسم المشروع مطلوب',
            'categoryName'=>'الحد الادني مطلوب',
            'categoryName'=>'الحد الاقصي مطلوب',
        ]);
        $cat =  Category::find($request->id);
       
        $cat->name = $request->categoryName;
        $cat->from = $request->from;
        $cat->to = $request->to;
       
        $cat->save();
        return FacadesRedirect::route('cat.category');
    }
    
}
