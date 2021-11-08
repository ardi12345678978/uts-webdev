<?php


use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProjectController;
use App\Models\Project;
use Illuminate\Support\Facades\Route;

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
    return view("home", [
        "title" => "Home",
        "pagetitle" => "Welcome Home",
        "active_home" => "active",
        "active_projects" => "",
        "active_contact" => "",
        "active_courses" => ""
    ]);
});

Route::get('/contact', function () {
    return view("hello", [
        "title" => "Contact",
        "myname" => "Ardi",
        "email" => "benedictusardi1@gmail.com",
        "line" => "ardi123456789",
        "active_home" => "",
        "active_projects" => "",
        "active_contact" => "active",
        "active_courses" => ""
    ]);
});

Route::resource('projects', ProjectController::class);

Route::resource('courses', CourseController::class);
