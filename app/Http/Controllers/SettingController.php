<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;


class SettingController extends Controller
{
    public function show()
    {
        return view ('admin.settings.edit');
    }
    public function edit(Request $request,$id)
    {
        $request->validate([
            'name'=>'required',
            'goal'=>'required',
            'email'=>'required',
            'address'=>'required',
            'brief'=>'required',
            'vision'=>'required',
            'message'=>'required',
            'facebook'=>'required',
            'insta'=>'required',
            'linkedin'=>'required',
            'site'=>'required',
            'whatsapp'=>'required',
        ],[
            'name'=>'اسم الموقع مطلوب',
            'goal'=>'اهداف الموقع مطلوب',
            'email'=>'ايميل الموقع مطلوب',
            'address'=>'عنوان الموقع مطلوب',
            'brief'=>'نبذه الموقع مطلوب',
            'vision'=>'رؤيه الموقع مطلوب',
            'message'=>'رساله الموقع مطلوب',
            'facebook'=>'فيسبوك الموقع مطلوب',
            'insta'=>'استجرام الموقع مطلوب',
            'linkedin'=>'لينكد ان الموقع مطلوب',
            'site'=>' الموقع مطلوب',
            'whatsapp'=>'واتس الموقع مطلوب',
        ]);

        $set =  Setting::find($id);
        $set->name = $request->name;
        $set->goals = $request->goal;
        $set->email = $request->email;
        $set->address = $request->address;
        $set->brief = $request->brief;
        $set->vision = $request->vision;
        $set->message = $request->message;
        $set->facebook = $request->facebook;
        $set->insta = $request->insta;
        $set->linkedin = $request->linkedin;
        $set->site = $request->site;
        $set->whatsapp = $request->whatsapp;
        $set->save();
        return redirect()->route('setting.setting');
    }
}
