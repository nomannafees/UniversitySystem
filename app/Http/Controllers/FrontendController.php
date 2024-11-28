<?php

namespace App\Http\Controllers;

use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FrontendController extends Controller
{
    function index(){
        $universities=University::paginate(6);
        return view('frontend.index',compact('universities'));
    }
    function show($slug){
        $university=University::where('slug',$slug)->first();
        return view('frontend.detail',compact('university'));
    }
}
