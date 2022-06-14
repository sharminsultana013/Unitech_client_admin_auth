<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\overview;



class overviewController extends Controller
{
    function overview() {
        // return view('admin.overviewAdmin');
        $overviewlists = overview::all();
        return view('admin.overviewAdmin',compact('overviewlists')); 
    }

    // insert_overview
    function insert_overview(Request $request){
        
        $request->validate([
          'image' => 'required|mimes:jpg,jpeg,png,JPG,webp,gif',
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
         $state = overview::insert([
          'image'=> $image_url,
         'title'=>$request-> title,
         'description'=>$request-> description, 
       ]); 
   
      //  return back();
      return redirect()->back()->with('alert', 'Company information was Added');
      }

    // overviewDelete
    function overviewDelete($id)
    {
    	overview::findOrFail($id)->delete();
    	// return back();
      return redirect()->back()->with('alert', 'Company information was Deleted');
    }



// 
}
