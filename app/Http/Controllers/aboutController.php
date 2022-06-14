<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\about;

class aboutController extends Controller
{
    function about() { 
        // return view('admin.about');
        $aboutlists = about::all();
    	return view('admin.about',compact('aboutlists')); 
    } 

    // insert about : post
    function insert_about(Request $request) 
    {
      $request->validate([
        'image' => 'required|mimes:jpg,jpeg,png,JPG,webp,gif',
        // 'title' => 'required',
        // 'description' => 'required',
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
       $state = about::insert([
       'image'=> $image_url,
       'title'=>$request-> title,
       'description'=>$request-> description, 
     ]); 
 
    //  return back();
    return redirect()->back()->with('alert', 'About information was Added');

    }
  
    // aboutEdit
    function aboutEdit (){
      return view('admin.aboutEdit');
      // $aboutedits = about::findOrFail($id);
    	// return view('admin.aboutEdit',compact('aboutedits'));
    }

    // delete about
    function aboutDelete($id)
    {
    	about::findOrFail($id)->delete();
    	// return back();
      return redirect()->back()->with('alert', 'About information was Deleted');
    }


    // end
}
