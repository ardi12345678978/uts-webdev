<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active_home = "";
        $active_projects = "active";
        $active_contact = "";
        $active_courses = "";

        $projects = Project::all();

        return view('project', compact('active_home', 'active_projects', 'active_contact', 'active_courses', 'projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $active_home = "";
        $active_projects = "active";
        $active_contact = "";
        $active_courses = "";

        return view('form.createProject', compact('active_home', 'active_projects', 'active_contact', 'active_courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $code = Str::upper(Str::substr($request->project, 0, 3));

        Project::create([
            'code' => $code,
            'project' => $request->project,
            'semester' => $request->semester,
            'mata_kuliah' => $request->mata_kuliah,
            'description' => $request->description
        ]);

        return redirect(route('projects.index'));
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
        $active_projects = "active";
        $active_contact = "";
        $active_courses = "";

        $project = Project::where('code', $id)->first();
        return view('showproject', compact('active_home', 'active_projects', 'active_contact', 'active_courses', 'project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $active_home = "";
        $active_projects = "active";
        $active_contact = "";
        $active_courses = "";

        $project = Project::findOrFail($id);
        return view('form.editProject', compact('active_home', 'active_projects', 'active_contact', 'active_courses', 'project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $code = Str::upper(Str::substr($request->project, 0, 3));
        $project = Project::findOrFail($id);
        $project->update([
            'code' => $code,
            'project' => $request->project,
            'semester' => $request->semester,
            'mata_kuliah' => $request->mata_kuliah,
            'description' => $request->description
        ]);
        return redirect(route('projects.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();
        return redirect(route('projects.index'));
    }
}
