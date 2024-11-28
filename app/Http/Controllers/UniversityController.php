<?php

namespace App\Http\Controllers;

use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use function League\Flysystem\move;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $universities = University::paginate(5);
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
     * @return
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:30',
            'location' => 'required|string|max:150',
            'admission_info' => 'required|string|max:255',
            'registrar_office' => 'required|string|max:150',
            'phone' => 'required|string|regex:/^\+?[0-9]{7,15}$/',
            'email' => 'required|email|max:150',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:150',
        ]);

        $image_name = null; // Default image name

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $image_extension = $image->getClientOriginalExtension();
            $image_name = time() . "." . $image_extension;
            $image->storeAs('/university_image', $image_name);


        }
        $request->request->add([
            'image' => $image_name,
            'slug' => Str::slug($request->name),
        ]);
        $requestData = $request->except(['img']);
        University::create($requestData);
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
        $request->validate([
            'name' => 'required|string|max:150',
            'location' => 'required|string|max:150'
        ]);
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
