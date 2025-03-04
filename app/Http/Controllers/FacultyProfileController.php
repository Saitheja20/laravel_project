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
}
