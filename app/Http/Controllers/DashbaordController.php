<?php

namespace App\Http\Controllers;

use App\Models\DegreeProgram;
use App\Models\University;
use Illuminate\Http\Request;

class DashbaordController extends Controller
{
    function index(){
        $universitiesCount = University::count();
        $degreeProgramsCount = DegreeProgram::count();
        return view('dashboard', compact('universitiesCount', 'degreeProgramsCount'));
    }
}
