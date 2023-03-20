<?php

namespace App\Http\Controllers;
use DataTables;
use Redirect;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect as FacadesRedirect;

class MessageController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.messages.message');
    }

    public function datatable(Request $request)
    {
        if ($request->ajax()) {
            $data = Message::select('*');
            return Datatables::of($data)
                
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
    public function sendmessage(Request $request)
    {
  
        $request->validate([
            
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'message' => 'required'
        ],[
            
            'name'=>' الاسم  مطلوب ',
            'phone'=>'رقم الهاتف  مطلوب  ',
            'email'=>' الايميل مطلوب',
            'message' => 'الرساله  مطلوبه'
        ]);
        $msg= new Message();
        $msg->name = $request->name;
        $msg->phone = $request->phone;
        $msg->email = $request->email;
        $msg->message = $request->message;
        $msg->save();
        
        return redirect()->back();
    }
}
