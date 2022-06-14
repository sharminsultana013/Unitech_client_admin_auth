<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class productController extends Controller
{
    function product(){
        // return view('admin.productAdmin'); 
        $productlists = product::all();
    	  return view('admin.productAdmin',compact('productlists')); 
    }

    // insert_product
    function insert_product(Request $request){
        
      $request->validate([
        'image' => 'required|mimes:jpg,jpeg,png,JPG,gif',
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
       $state = product::insert([
        'image'=> $image_url,
       'title'=>$request-> title,
       'description'=>$request-> description, 
     ]); 
 
    //  return back();
    return redirect()->back()->with('alert', 'Product information was Added');

    }

    // productDelete
    function productDelete($id)
    {
    	product::findOrFail($id)->delete();
    	// return back();
      return redirect()->back()->with('alert', 'Product information was Deleted');
    }

// end
}
