<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MessagesFromClient;

class messageFromClientController extends Controller
{
    function MessagesFromClients() {
        // return view('admin.MessagesFromClients');
        $MessagesFromClient = MessagesFromClient::all();
        return view('admin.MessagesFromClients',compact('MessagesFromClient'));
    }

    
    // insert_contact
    function insert_contact(Request $request){
        
        $state = MessagesFromClient::insert([
        'name'=>$request-> name,
        'email'=>$request-> email,
        'subject'=>$request-> subject, 
        'message'=>$request-> message, 
      ]); 
  
      return back();
    // return redirect()->back()->with('alert', 'Tour Message Was Send. Thank You.');
 
    }

    // userMessageDelete
    function userMessageDelete($id)
    {
    	MessagesFromClient::findOrFail($id)->delete();
    	// return back();
        return redirect()->back()->with('alert', 'Message Was Deleted');
    }


    
}
