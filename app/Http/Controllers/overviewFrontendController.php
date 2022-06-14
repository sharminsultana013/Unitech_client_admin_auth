<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\overview;

class overviewFrontendController extends Controller
{
    function overview() {
        // return view('overview');
        $overviews = overview::latest()->take(6)->get();
        return view('overview',compact('overviews'));
    }
}
