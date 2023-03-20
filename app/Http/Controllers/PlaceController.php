<?php
namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Place;

use DataTables;
use Redirect;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect as FacadesRedirect;

class PlaceController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.places.place');
    }

    public function datatable(Request $request)
    {
        if ($request->ajax()) {
            $data = Place::select('*');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $edit =  route('place.editplace',$row->id) ;
                    $actionBtn = '<a href=" ' . $edit . '" class="edit btn btn-success btn-sm m-1">تعديل</a>';
                    $actionBtn .= '<a href="javascript:void(0)" value="' . $row->id . '" class="delete btn btn-danger btn-sm">حذف</a>';
                    return $actionBtn;
                })
                ->filter(
                    function ($instance) use ($request) {
                        if (request()->has('name')) {
                            $instance->where(function ($w) use ($request) {
                                $name = $request->get('name');
                                $w->orWhere('compname', 'LIKE', "%$name%");
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
        return view('admin.places.addplace');
    }

    public function store(Request $request)
    {
        //$request->validate([
          //  'name'=>'required',
           // 'image'=>'required',
        //],[
           // 'name'=>' اسم المكان مطلوب ',
            //'image'=>'صوره  المكان مطلوب  ', 
        //]);

        $plc= new Place();

        $plc->compname = $request->name;
        $file=$request->file('image');
        $filename=$file->getClientOriginalName();
        $file->move('images/plc',$filename);
        $plc->compimage = $filename;
        $plc->compimage = $filename;
        $plc->save();
        return FacadesRedirect::route('place.places');
    }

    public function delete(Request $request)
    {
        $plc = Place::findOrFail($request->id);
        if (File::exists('images/plc/' .$plc->compimage)) 
        {
            File::delete('images/plc/'.$plc->compimage);
        }
        $y = $plc->delete();
        if($y){
            return response()->json(['err' => false , 'msg' => 'deleted done'],200);
        }else{
            return response()->json(['err' => true , 'msg' => 'pro'],200);
        }
    }

    public function edit($id)
    {

        $plc =  Place::find($id);
        return view('admin.places.edit', ['plc'=>$plc]);
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'name'=>'required',
            
        ],[
            'name'=>' اسم المكان مطلوب ',
             
        ]);

        $plc =  Place::find($id);
        $plc->compname = $request->name;

        if($request->hasfile('image'))
        {
            if (File::exists('images/plc/' .$plc->compimage)) 
            {
                File::delete('images/plc/'.$plc->compimage);
            }
            $file=$request->file('image');
            $filename=$file->getClientOriginalName();
            $file->move('images/plc',$filename);
            $plc->compimage=$filename ;
        }
        
        $plc->save();
        return FacadesRedirect::route('place.places');
    }

    public function allplace()
    {
        $places = Place::paginate(5);
        return view('place.fullplace', compact('places'));
    }

    public function OnePlace($id)
    {
        $place = Place::find($id);
        return view('place.onePlace', compact('place'));
    }

}
