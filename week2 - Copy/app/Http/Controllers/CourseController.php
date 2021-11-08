<?php

namespace App\Http\Controllers;

use App\Models\CourseModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active_home = "";
        $active_projects = "";
        $active_contact = "";
        $active_courses = "active";

        $courses = CourseModel::all();

        return view('course', compact('active_home', 'active_projects', 'active_contact', 'active_courses', 'courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $active_home = "";
        $active_projects = "";
        $active_contact = "";
        $active_courses = "active";

        return view('form.createCourse', compact('active_home', 'active_projects', 'active_contact', 'active_courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        CourseModel::create([
            'code' => $request->code,
            'name' => $request->name,
            'lecturer' => $request->lecturer,
            'sks' => $request->sks,
            'description' => $request->description
        ]);

        return redirect(route('courses.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $active_home = "";
        $active_projects = "";
        $active_contact = "";
        $active_courses = "active";

        $course = CourseModel::where('code', $id)->first();
        return view('detailcourse', compact('active_home', 'active_projects', 'active_contact', 'active_courses', 'course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($code)
    {
        $active_home = "";
        $active_projects = "";
        $active_contact = "";
        $active_courses = "active";

        $course = CourseModel::where('code', $code)->first();
        return view('form.editCourse', compact('active_home', 'active_projects', 'active_contact', 'active_courses', 'course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $code)
    {
        // $course = CourseModel::where('code', $code)->first();
        // $course->update([
        //     'code' => $request->code,
        //     'name' => $request->name,
        //     'lecturer' => $request->lecturer,
        //     'sks' => $request->sks,
        //     'description' => $request->description
        // ]);

        $course = [
            'code' => $request->code,
            'name' => $request->name,
            'lecturer' => $request->lecturer,
            'sks' => $request->sks,
            'description' => $request->description
        ];
        CourseModel::where('code', $code)->update($course);

        return redirect(route('courses.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($code)
    {
        CourseModel::where('code', $code)->delete();
        return redirect(route('courses.index'));
    }
}
