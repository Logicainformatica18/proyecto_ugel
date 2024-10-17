<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\Type;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $course = Course::orderBy('id','DESC')->get();
        $type = Type::all();
        return view("course", compact("course","type"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $course = Course::orderBy('id','DESC')->get();
        return view("coursetable", compact("course"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $course = new Course;
        $course->description = $request->description;
        $course->detail = $request->detail;
        $course->type_id = $request->type;
         $course->folder_certification = $request->folder_certification;
        $course->save();
        return $this->create();
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $show="%".$request["show"]."%";
        $course=Course::where('description',"like",$show)->all();
        return view('coursetable',compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $course = Course::find($request->id);
       return $course;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $course = Course::find($request->id);
        $course->description = $request->description;
        $course->detail = $request->detail;
           $course->folder_certification = $request->folder_certification;
        $course->save();
        return $this->create();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {



       Course::find($request->id)->delete();
      return $this->create();
    }
}
