<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\services;

class serviceController extends Controller
{
    function service() {
        // return view('admin.serviceAdmin');
        $servicelists = services::all();
    	return view('admin.serviceAdmin',compact('servicelists')); 
    }
 
    // insert_service
    function insert_service(Request $request){
        
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
         $state = services::insert([
          'image'=> $image_url,
         'title'=>$request-> title,
         'description'=>$request-> description, 
       ]); 
   
      //  return back();
      return redirect()->back()->with('alert', 'Service information was Added');
  
      }

      // serviceDelete
      function serviceDelete($id)
        {
          services::findOrFail($id)->delete();
          // return back();
          return redirect()->back()->with('alert', 'Product information was Deleted');
        }

        // serviceEdit
        function serviceEdit($id)
        {
          echo $id;
        }


// end
}
