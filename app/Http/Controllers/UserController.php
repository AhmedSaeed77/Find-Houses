<?php

namespace App\Http\Controllers;

use DataTables;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function logout()
    {
        auth()->guard('web')->logout();
        return redirect('admin/check');
    }

    public function check()
    {
        if(auth()->check())
        {
            return redirect('admin');
        }
        return view('admin.auth.login');
    }
    public function login(Request $request)
    {

        $remember_me = $request->has('remember_me') ? true : false;
        if (auth()->guard('web')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) 
        {
            return redirect('admin');
        } 
        else 
        {
            return redirect('admin/check');
        }
    }

    public function index(Request $request)
    {
        return view('table');
    }

    public function datatable(Request $request)
    {
        if ($request->ajax()) 
        {
            $data = User::select('*')->orderBy('id', 'desc');
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $edit = '';
                    $actionBtn = '<a href="' . $edit . '" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->filter(
                    function ($instance) use ($request) {
                        if (!empty($request->get('name'))) {
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
}
