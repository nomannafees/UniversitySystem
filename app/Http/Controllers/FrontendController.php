<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FrontendController extends Controller
{
    function index(){

        return view('frontend.index');
    }
    function show(){
        return view('frontend.detail');
    }
}
