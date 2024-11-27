<?php

namespace App\Http\Controllers;

use App\Models\University;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $universities = University::all();
        return view('backend.university.index', compact('universities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.university.create-edit');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     */
    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|max:25']);
        University::create(['name'=>$request->name]);
        return redirect()->route('universities.index')->with('success', 'University added successfully.');
    }

    /**
     * Display the specified resource.
     * @param University $university
     */
    public function show(University $university)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param University $university
     * @return \Illuminate\Container\Container|mixed
     */
    public function edit(University $university)
    {
        return view('backend.university.create-edit', compact('university'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param University $university
     * @return
     */
    public function update(Request $request, University $university)
    {
        $request->validate(['name' => 'required|string|max:255']);
        $university->update($request->all());
        return redirect()->route('universities.index')->with('success', 'University updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     * @param University $university
     * @return
     */
    public function destroy(University $university)
    {
        $university->delete();
        return redirect()->route('universities.index')->with('success', 'University deleted successfully.');
    }
}
