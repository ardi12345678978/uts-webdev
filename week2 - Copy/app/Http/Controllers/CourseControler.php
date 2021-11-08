<?php

namespace App\Http\Controllers;

use App\Models\CourseModel;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return view('course',[
            "tittle"=> "Course",
            "course"=> CourseModel::allData()
        ]);
    }

    public function detail($code)
    {
        return view("detailcourse", [
            "title"=> "Course",
            "courses" => CourseModel::dataWithCode($code)
        ]);
    }
}