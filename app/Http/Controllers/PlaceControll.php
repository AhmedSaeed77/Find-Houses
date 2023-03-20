<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;
use Intervention\Image\Facades\Image;
class PlaceControll extends Controller
{
    
    public function store(Request $request)
    {
        $newcompound = new Place();
        
        if($request->hasFile('image'))  
        {
            $image = Image::make($request->file('image'));
            $imageName = time().'-'.$request->file('image')->getClientOriginalName();
            $destinationPath = public_path('images/');
            $image->save($destinationPath.$imageName);
            $destinationPathThumbnail = ('images/thumbnail/');
            $image->resize(100,100); 
            $image->save($destinationPathThumbnail.$imageName);
            $newcompound->compimage = $destinationPathThumbnail.$imageName;    
        }
        else
        {
            $newcompound->compimage = 'images/default.png';
        }

        if($request->name)
        {
            $newcompound->compname = $request->name;
        }

        $newcompound->save();

        return redirect()->route('place.places');
     
    }

    function show()
    {
        $places=Place::all();
        return view('/places/showplace',compact('places'));
    }

    function delete($id)
    {
        $place=Place::find($id);
        $place->delete();
        return redirect()->route('place.places');
    }

    function edit($id)
    {
        $place=Place::find($id);
        return view('/places/edit',compact('place'));
    }
    
    function update(Request $request)
    {
        $place = Place::find($request->id);

        if($request->name)
        {
            $place->compname= $request->name;
        }
        
        if($request->hasFile('image')) 
        {
            $image = Image::make($request->file('image'));
            $imageName = time().'-'.$request->file('image')->getClientOriginalName();
            $destinationPath = public_path('images/');
            $image->save($destinationPath.$imageName);
            $destinationPathThumbnail = 'images/thumbnail/';
            $image->resize(100,100);
            $image->save($destinationPathThumbnail.$imageName);

            $place->compimage=$destinationPathThumbnail.$imageName;    
        }
        $place->save();
        return redirect()->route('place.places');
    }

}