<?php

namespace App\Http\Controllers;

use DataTables;
use Redirect;
use App\Models\Project;
use App\Models\Image;
use App\Models\Status;
use App\Models\Category;
use App\Models\Developer;
use App\Models\Type;
use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect as FacadesRedirect;

class projectController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.projects.project');
    }

    public function datatable(Request $request)
    {
        if ($request->ajax()) 
        {
            $data = Project::select('*');
             //$data = Project::whereNotNull('category_id');
           
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('from', function ($row) {
                    $name = $row->category->from;
                        return $name;
                })
                ->addColumn('catname', function ($row) {
                    $name = $row->category->name;
                        return $name;
                })
                ->addColumn('dev', function ($row) {
                    $dev = $row->developer->companyName;
                  return $dev;
                })
                ->addColumn('action', function ($row) {
                    $edit =  route('pro.editProject',$row->id) ;
                    $actionBtn = '<a href=" ' . $edit . '" class="edit btn btn-success btn-sm m-1">تعديل</a>';
                    $actionBtn .= '<a href="javascript:void(0)" value="' . $row->id . '" class="delete btn btn-danger btn-sm">حذف</a>';
                    return $actionBtn;
                })
                ->filter(
                    function ($instance) use ($request) {
                        if (request()->has('name')) {
                            $instance->where(function ($w) use ($request) {
                                $name = $request->get('name');
                                $w->orWhere('compound', 'LIKE', "%$name%");
                            });
                        }
                        
                        if ($request->get('owner') !== null) {
                            $customer_id = $request->get('owner');
                            $instance->where('developer_id', $customer_id);
                        }
                    }
                )
                ->rawColumns(['action','dev'])
                ->make(true);
        }
    }
    public function create(){
        return view('admin.projects.add2');
    }
    public function store(Request $request){
        
        $request->validate([
            'projectName'=>'required',
            'developer'=>'required',
            'projectSize'=>'required',
            'floors'=>'required',
            'projectType'=>'required',
            'category'=>'required',
            'maintain'=>'required',
            'club'=>'required',
            'status'=>'required',
            'date'=>'required',
            'underpay'=>'required',
            'delivery'=>'required',
            'finishing'=>'required',
            'policy'=>'required',
            'loading'=>'required',
            'updated'=>'required',
            'parking'=>'required',
            'placeId'=>'required',
            'image' => 'required',
            'link1' => 'required',
            'link2' => 'required',

        ],[
            'projectName'=>'اسم المشروع مطلوب',
            'developer'=>'برجاء اختيار المطور',
            'projectSize'=>'مساحه المشروع مطلوبه',
            'floors'=>'عدد الطوابق مطلوب',
            'projectType'=>'برجاء اختيار نوع المشروع',
            'category'=>'برجاء اختيار الفئه السعريه',
            'maintain'=>'تكاليف الصيانه مطلوب',
            'club'=>'تكاليف النادي مطلوبه',
            'status'=>'برجاء اختيار حاله المشروع',
            'date'=>'برجاء اختيار تاريخ التسليم',
            'underpay'=>'المبلغ تحت الحساب مطلوب',
            'delivery'=>'خانة التسليم مطلوبه',
            'finishing'=>'بيانات الانتهاء مطلوبه',
            'policy'=>'السياسه المتبعه مطلوبه',
            'loading'=>'نسبه التحميل مطلوبه',
            'updated'=>'برجاء ادخال حاله التعديل',
            'parking'=>'تكاليف الركن مطلوبه',
            'placeId'=>'برجاء اختيار مكان المشروع',
            'image' => 'الصوره او اللوجو مطلوب',
            'link1' => 'اللينك الاول مطلوب',
            'link2' => 'اللينك الثانى مطلوب',

        ]);
        $project = new Project();
        $project->compound = $request->projectName;
        $project->developer_id = $request->developer;
        $project->size = $request->projectSize;
        $project->floors = $request->floors;
        $project->types_id = $request->projectType;
        $project->category_id = $request->category;
        $project->maintanence_fee = $request->maintain;
        $project->club_fee = $request->club;
        $project->status_id = $request->status;
        $project->delivery_date = $request->date;
        $project->downpaynment = $request->underpay;
        $project->delivery = $request->delivery;
        $project->finishing = $request->finishing;
        $project->offers = $request->offer;
        $project->cash_discount = $request->cashDiscount;
        $project->politics = $request->policy;
        $project->occupation = $request->loading;
        $project->updated = $request->updated;
        $project->parking_fee = $request->parking;
        $project->parking_fee = $request->parking;
        $project->year = $request->years;
        $project->place_id = $request->placeId;
        $project->link1 = $request->link1;
        $project->link2 = $request->link2;

        $file=$request->file('image');
        $filename=$file->getClientOriginalName();
        $file->move('images/pro',$filename);
        $project->image = $filename;
        $project->save();

        if ($request->has('images')) 
        {
            for ($x = 0; $x <= count($request->images) - 1; $x++) 
            {
                $file=$request->images[$x];
                $filename=$file->getClientOriginalName();
                $file->move('images/pros',$filename);
                $img = new Image() ; 
                $img->project_id = $project->id ;
                $img->name = $filename ;
                $img->save();
            }
        }
        return FacadesRedirect::route('pro.project');
    }

    public function delete(Request $request)
    {
        $p = Project::findOrFail($request->id);
        $y = $p->delete();
        if($y){
            return response()->json(['err' => false , 'msg' => 'deleted done'],200);
        }else{
            return response()->json(['err' => true , 'msg' => 'pro'],200);
        }
    }

    public function edit($id)
    {

        $pro =  Project::find($id);
        return view('admin.projects.updateProject', ['pro'=>$pro]);
    }

    public function update(Request $request,$id)
    {
     
        $request->validate([
            'projectName'=>'required',
            'developer'=>'required',
            'projectSize'=>'required',
            'floors'=>'required',
            'projectType'=>'required',
            'category'=>'required',
            'maintain'=>'required',
            'club'=>'required',
            'status'=>'required',
            'date'=>'required',
            'underpay'=>'required',
            'delivery'=>'required',
            'finishing'=>'required',
            'policy'=>'required',
            'loading'=>'required',
            'updated'=>'required',
            'parking'=>'required',
            'placeId'=>'required',
            'link1' => 'required',
            'link2' => 'required',

        ],[
            'projectName'=>'اسم المشروع مطلوب',
            'developer'=>'برجاء اختيار المطور',
            'projectSize'=>'مساحه المشروع مطلوبه',
            'floors'=>'عدد الطوابق مطلوب',
            'projectType'=>'برجاء اختيار نوع المشروع',
            'category'=>'برجاء اختيار الفئه السعريه',
            'maintain'=>'تكاليف الصيانه مطلوب',
            'club'=>'تكاليف النادي مطلوبه',
            'status'=>'برجاء اختيار حاله المشروع',
            'date'=>'برجاء اختيار تاريخ التسليم',
            'underpay'=>'المبلغ تحت الحساب مطلوب',
            'delivery'=>'خانة التسليم مطلوبه',
            'finishing'=>'بيانات الانتهاء مطلوبه',
            'policy'=>'السياسه المتبعه مطلوبه',
            'loading'=>'نسبه التحميل مطلوبه',
            'updated'=>'برجاء ادخال حاله التعديل',
            'parking'=>'تكاليف الركن مطلوبه',
            'placeId'=>'المكان مطلوب',
            'link1' => 'اللينك الاول مطلوب',
            'link2' => 'اللينك الثانى مطلوب',
            
        ]);
        $project =  Project::find($request->id);
       
        $project->compound = $request->projectName;
        $project->developer_id = $request->developer;
        $project->size = $request->projectSize;
        $project->floors = $request->floors;
        $project->types_id = $request->projectType;
        $project->category_id = $request->category;
        $project->maintanence_fee = $request->maintain;
        $project->club_fee = $request->club;
        $project->status_id = $request->status;
        $project->delivery_date = $request->date;
        $project->downpaynment = $request->underpay;
        $project->delivery = $request->delivery;
        $project->finishing = $request->finishing;
        $project->year = $request->years;
        $project->offers = $request->offer;
        $project->cash_discount = $request->cashDiscount;
        $project->politics = $request->policy;
        $project->occupation = $request->loading;
        $project->updated = $request->updated;
        $project->parking_fee = $request->parking;
        $project->place_id = $request->placeId;
        $project->link1 = $request->link1;
        $project->link2 = $request->link2;

        if($request->hasfile('image'))
        {
            if (File::exists('images/pro/'.$project->image)) 
            {
                File::delete('images/pro/'.$project->image);
            }
            $file=$request->file('image');
            $filename=$file->getClientOriginalName();
            $file->move('images/pro',$filename);
            $project->image=$filename ;
        }
        
        if ($request->has('images')) 
        {
            $images = Image::where("project_id",$project->id)->get();
            foreach($images as $img)
            {
                if (File::exists("images/pros/" . $img->name))
                {
                    File::delete("images/pros/".$img -> name);
                    $img->delete();
                }
            }
            for ($x = 0; $x <= count($request->images) - 1; $x++) 
            {
                $file=$request->images[$x];
                $filename=$file->getClientOriginalName();
                $file->move('images/pros',$filename);
                $img = new Image() ; 
                $img->project_id = $project->id ;
                $img->name = $filename ;
                $img->save();
            }
        }
        $project->save();

        return FacadesRedirect::route('pro.project');
    }
    
    public function OneProject($id)
    {
        $project = Project::find($id);
        $place = Place::find($project->place_id); 
        $cat = Category::find($project->category_id); 
        $dev = Developer::find($project->developer_id); 
        $proImg = Image::where('project_id',$project->id)->get();
        return view('project.oneProject',['project'=>$project,'proImg'=>$proImg,'place'=>$place,'cat'=>$cat,'dev'=>$dev]) ;
    }

    public function allprojects()
    {
        $projects = Project::paginate(9);
        return view('project.fullProject', compact('projects'));
    }
}