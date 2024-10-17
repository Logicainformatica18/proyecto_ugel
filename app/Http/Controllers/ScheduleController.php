<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Schedule;


class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schedule = Schedule::orderBy('id','DESC')->get();
        return view("schedule", compact("schedule"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $schedule = Schedule::orderBy('id','DESC')->get();
        return view("scheduletable", compact("schedule"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $schedule = new Schedule;
        $schedule->description = $request->description;
        $schedule->detail = $request->detail;
        $schedule->save();
       return $this->create();
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $show="%".$request["show"]."%";
        $schedule=Schedule::where('description',"like",$show)->all();
        return view('typetable',compact('type'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request )
    {
       $schedule = Schedule::find($request->id);
        return $schedule;

        }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $schedule = Schedule::find($request->id);
        $schedule->description = $request->description;
        $schedule->detail = $request->detail;
        $schedule->save();
        return $this->create();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Schedule::find($request->id)->delete();
        return $this->create();

    }
}
