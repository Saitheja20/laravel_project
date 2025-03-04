<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactHodController;
use App\Http\Controllers\FacultyProfileController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserController::class, 'index']);

Route::get('/contact_hod', [ContactHodController::class, 'index']);

Route::get('/faculty_profile',[FacultyProfileController::class, 'index'])->name('faculty_profile.index');;  //new route added for faculty profile
// making crud operations

Route::get('/faculties/create', [FacultyProfileController::class, 'create'])->name('faculty.create');
Route::post('/faculties', [FacultyProfileController::class, 'store'])->name('faculty.store');
Route::get('/faculties/{id}/edit', [FacultyProfileController::class, 'edit'])->name('faculty.edit');
Route::put('/faculties/{id}', [FacultyProfileController::class, 'update'])->name('faculty.update');
Route::delete('/faculties/{id}', [FacultyProfileController::class, 'destroy'])->name('faculty.destroy');