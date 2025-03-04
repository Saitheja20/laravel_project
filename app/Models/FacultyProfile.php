<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacultyProfile extends Model
{
    // use HasFactory;
       public $timestamps = false;

    Protected $table = 'dummy_dep_faculty_profile';

    protected $fillable = [
        'name',        // Add other columns you want to be mass-assigned
        'email',
        'department',
        'designation',
        'qualification',
        'experience_in_year',
         // If you are updating the image, you should include it here as well
    ];
}
