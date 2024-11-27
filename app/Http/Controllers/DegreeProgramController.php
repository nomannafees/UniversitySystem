<?php

namespace App\Http\Controllers;

use App\Models\DegreeProgram;
use App\Models\University;
use Illuminate\Http\Request;

class DegreeProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $degrees = DegreeProgram::all();
        return view('backend.degree_program.index', compact('degrees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $universities = University::all();
        return view('backend.degree_program.create-edit', compact('universities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'university_id' => 'required|exists:universities,id',
            'degree_name' => 'required|string|max:255',
            'last_year_merit' => 'required|numeric',
            'fees' => 'required|numeric',
        ]);
        DegreeProgram::create($request->all());
        return redirect()->route('degree-program.index')->with('success', 'Program added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(DegreeProgram $degreeProgram)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DegreeProgram $degreeProgram)
    {
        $universities = University::all();
        return view('backend.degree_program.create-edit', compact('degreeProgram','universities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DegreeProgram $degreeProgram)
    {
        $request->validate([
            'university_id' => 'required|exists:universities,id',
            'degree_name' => 'required|string|max:255',
            'last_year_merit' => 'required|numeric',
            'fees' => 'required|numeric',
        ]);
        $degreeProgram->update($request->all());
        return redirect()->route('degree-program.index')->with('success', 'Program updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DegreeProgram $degreeProgram)
    {
        $degreeProgram->delete();
        return redirect()->route('degree-program.index')->with('success', 'Program deleted successfully.');
    }
}
