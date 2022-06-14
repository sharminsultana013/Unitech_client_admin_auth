<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\services;
use App\Models\gallery;
use App\Models\client;
use App\Models\slider;
use App\Models\about;
use App\Models\MessagesFromClient;
use App\Models\address;

class indexController extends Controller
{
    function index(){
        // return view('index');
        $products = product::latest()->take(6)->get();
        $productList = product::latest()->take(6)->get();
        $services = services::latest()->take(6)->get();
        $galleries = gallery::latest()->take(6)->get();
        $clients = client::latest()->take(10)->get();
        $sliders = slider::latest()->take(4)->get();
        $abouts = about::latest()->take(1)->get();
        $address = address::latest()->take(1)->get();
        return view('index',compact('products' , 'services' , 'galleries' , 'clients' , 'sliders' , 'abouts' , 'address' , 'productList'));
    }



    // end
} 
