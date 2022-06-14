<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\messageToClients;

class messageToClientController extends Controller
{
    function messageToClient() {
        // return view('admin.messageToClient');
        $messagelists = messageToClients::all();
    	  return view('admin.messageToClient',compact('messagelists')); 
    }
    
    // insert_message
    function insert_message(Request $request){
        
        $request->validate([
          'image' => 'required|mimes:jpg,jpeg,png,JPG',
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
         $state = messageToClients::insert([
         'image'=> $image_url,
         'name'=>$request-> name,
         'designition'=>$request-> designition, 
         'message'=>$request-> message, 
       ]); 
   
      //  return back();
      return redirect()->back()->with('alert', 'New Message Was Added');
  
      }

    //   messageDelete
    function messageDelete($id)
    {
    	messageToClients::findOrFail($id)->delete();
    	// return back();
        return redirect()->back()->with('alert', 'Message Was Deleted');
    }

    // message_edit
    // function message_edit() {
    //     return view('')
    // }



// end
}
