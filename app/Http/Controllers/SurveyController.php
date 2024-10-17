<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use App\Http\Requests\StoreSurveyRequest;
use App\Http\Requests\UpdateSurveyRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $survey = Survey::orderBy('id','DESC')->get();
        return view("survey", compact("survey"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
                 $survey = Survey::orderBy('id','DESC')->get();
        return view("surveytable", compact("survey"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
           $survey = new Survey;
        $survey->description = $request->description;
        $survey->detail = $request->detail;
                $survey->date_start = $request->date_start;
                        $survey->date_end = $request->date_end;
        $survey->url = $request->url;
         $survey->type = $request->type;
               $survey->state = $request->state;
        $survey->save();
        return $this->create();
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
       $survey = Survey::find($request->id);
        return $survey;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
           $survey = survey::find($request->id);
        $survey->description = $request->description;
        $survey->detail = $request->detail;
             $survey->date_start = $request->date_start;
                        $survey->date_end = $request->date_end;
                               $survey->type = $request->type;
                        $survey->state = $request->state;
        $survey->save();
        return $this->create();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Survey::find($request->id)->delete();
        return $this->create();
    }
        public function survey_detail(Request $request)
    {
       return Session::put('survey_id',$request->id);

    }
}
