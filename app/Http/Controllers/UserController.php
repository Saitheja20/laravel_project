<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Fetch all users from the database
        $users = User::all();

        // Return the view and pass the users data
        return view('users.index', compact('users'));
    }
}
