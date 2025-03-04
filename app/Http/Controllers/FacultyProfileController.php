<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\FacultyProfile;

class FacultyProfileController extends Controller
{
    //
    public function index(){

        $facultys = FacultyProfile::all();

    foreach ($facultys as $faculty) {
        if ($faculty->image) {
            $faculty->image = base64_encode($faculty->image); // Encoding the image to base64
        }
    }
        return view('facultyprofile.index',compact('facultys'));
    }


     public function create()
    {
        return view('facultyprofile.create');
    }

    // Store a new faculty profile
    public function store(Request $request)
    {
        // Validate input data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:faculty_profiles,email',
            'department' => 'required|string',
            'designation' => 'required|string',
            'qualification' => 'required|string',
            'experience' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle file upload for image if exists
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('images', 'public');
        } else {
            $image = null;
        }

        // Create new faculty profile
        FacultyProfile::create([
            'name' => $request->name,
            'email' => $request->email,
            'department' => $request->department,
            'designation' => $request->designation,
            'qualification' => $request->qualification,
            'experience' => $request->experience,
            'image' => $image,
        ]);

        return redirect()->route('faculty.index');
    }

    // Show the form to edit a specific faculty profile
    public function edit($id)
    {
        $faculty = FacultyProfile::findOrFail($id);
        return view('facultyprofile.edit', compact('faculty'));
    }

    // Update the specific faculty profile
    public function update(Request $request, $id)
    {
        $faculty = FacultyProfile::findOrFail($id);

        // Validate input data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'department' => 'required|string',
            'designation' => 'required|string',
            'qualification' => 'required|string',
            'experience' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle file upload for image if exists
        if ($request->hasFile('image')) {
             $image = $request->file('image');
            $imageData = file_get_contents($image);
            $base64Image = base64_encode($imageData); // Convert image to Base64
        }

        // Update faculty profile
        $faculty->update([
            'name' => $request->name,
            'department' => $request->department,
            'designation' => $request->designation,
            'qualification' => $request->qualification,
            'experience_in_year' => $request->experience,
            'image'=> isset($base64Image) ? $base64Image : $faculty->image,
        ]);

        return redirect()->route('faculty_profile.index');
    }

    // Delete the specific faculty profile
    public function destroy($id)
    {
        $faculty = FacultyProfile::findOrFail($id);
        $faculty->delete();

        return redirect()->route('faculty.index');
    }
}
