<?php

namespace App\Http\Controllers;


use App\Models\ContactHod;

class ContactHodController extends Controller
{
    public function index()
    {
        // Fetch all users from the database
        $users = ContactHod::all();

        // Return the view and pass the users data
        return view('contact_hod.index', compact('users'));
    }
}
