<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\client;

class clientController extends Controller
{
    function client(){
        // return view('admin.clientAdmin');
        $clientlists = client::all();
    	return view('admin.clientAdmin',compact('clientlists')); 
    }

    // insert_client
    function insert_client(Request $request)
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
       $state = client::insert([ 
        'image'=> $image_url,
     ]); 
 
    //  return back();
    return redirect()->back()->with('alert', 'Client was Added' );

    }

    // deleteClient
    function deleteClient($id)
    {
    	client::findOrFail($id)->delete();
    	// return back();
        return redirect()->back()->with('alert', 'Client was deleted' );
    }



// end
}
