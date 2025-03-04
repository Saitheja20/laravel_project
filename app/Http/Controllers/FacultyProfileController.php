<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\FacultyProfile;

class FacultyProfileController extends Controller
{
    //
    public function index(){
        $facultys = FacultyProfile::all();
        return view('facultyprofile.index',compact('facultys'));
    }
}
