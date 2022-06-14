<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slider;

class sliderController extends Controller
{
    function slider(){
        // return view('admin/sliderAdmin');
        $sliderlists = slider::all();
    	return view('admin.sliderAdmin',compact('sliderlists')); 
    }

    function insert_slider(Request $request)
    {
      $request->validate([
        'image' => 'required|mimes:jpg,jpeg,png,JPG,webp,gif',
      ],
      [
          'image.required' => 'Choose jpg/jpeg/png/JPG/webp file!'
      ]); 

     //image insert
      $image= $request->file('image'); //('image') is form field name
       $image_name=hexdec(uniqid());
       $ext=strtolower($image->getClientOriginalExtension());
       $image_full_name=$image_name.'.'.$ext;
       $upload_path='public/admin/image/';
       $image_url=$upload_path.$image_full_name;
       $success=$image->move($upload_path,$image_full_name);

      //end

       //whole form insert in db
       $state = slider::insert([ 
        'image'=> $image_url,
     ]); 
 
    //  return back();
    return redirect()->back()->with('alert', 'Image was Added' );

    }

    // delete slider
    function sliderDelete($id) {
        slider::findOrFail($id)->delete();
    	// return back();
        return redirect()->back()->with('alert', 'Image was deleted' );
    }


// end
}
