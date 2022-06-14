<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\address;

class addressController extends Controller
{
    //address
    function address() {
        // return view('admin.address');
        $address = address::all();
    	return view('admin.address',compact('address')); 
    }

    // insert_address
    function insert_address(Request $request) 
    {
       //whole form insert in db
       $state = address::insert([
       'address'=>$request-> address,
       'mobile'=>$request-> mobile,
       'email'=>$request-> email, 
     ]); 
 
    //  return back();
    return redirect()->back()->with('alert', 'Address was Added');

    }

     // delete address
     function addressDelete($id)
     {
        address::findOrFail($id)->delete();
         // return back();
       return redirect()->back()->with('alert', 'Address was Deleted');
     }
}
