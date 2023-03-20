<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Project;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }

    public function search(Request $request)
    {
        if($request->name != null)
        {
            $result=DB::table('projects')
            ->where('place_id',$request->location)
            ->where('category_id',$request->type)
            ->where('compound','like',"%{$request->name}%")
            ->first();

            $pros = Project::all();
            foreach($pros as $pro) 
            {
                if($pro->compound != $request->name)
                {
                    return   redirect()->back();  
                }
            }
            
            return redirect()->route('project', ['id' => (int)$result->id]);
        }
        else 
        {
            $projects = DB::table('projects')
            ->where('place_id',$request->location)
            ->where('category_id',$request->type)
            ->get();

            return view('projectsearch',compact('projects'));
        }
    }
}
