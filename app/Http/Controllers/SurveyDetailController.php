<?php

namespace App\Http\Controllers;

use App\Models\SelectionDetail;
use App\Models\SurveyDetail;
use App\Models\Survey;
use App\Models\Selection;
use App\Http\Requests\StoreSurveyDetailRequest;
use App\Http\Requests\UpdateSurveyDetailRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class SurveyDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $survey_id = Session::get('survey_id');
        $survey = Survey::find($survey_id);
        $selection = Selection::orderBy('description','asc')->get();
        
        $survey_detail = surveyDetail::where("survey_id","=",$survey_id)->where("visible","=","yes")->orderBy('created_at','asc')->get();
            return view("survey_detail", compact("survey_detail","survey",'selection'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $survey_id = Session::get('survey_id');
        $survey = Survey::find($survey_id);
        $selection = Selection::orderBy('description','asc')->get();
        $survey_detail = surveyDetail::where("survey_id","=",$survey_id)->where("visible","=","yes")->orderBy('created_at','asc')->get();
        return view("survey_detailtable", compact("survey_detail","survey",'selection'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
 
        $survey_id = Session::get('survey_id');
    $valor = array(); // Crear un array vacío

$options = array(
    $request->option1,
    $request->option2,
    $request->option3,
    $request->option4,
    $request->option5,
    $request->option6,
    $request->option7,
    $request->option8,
    $request->option9,
    $request->option10
);
foreach ($options as $option) {
    if (!empty($option)) {
        $valor[] = $option;
    }
}
     
         $survey_detail = new SurveyDetail;  
        $survey_detail->survey_id   =   $survey_id;
         $survey_detail->question   =    $request->question;
            $survey_detail->detail   =    $request->detail;
          $survey_detail->type   =   $request->type;
              $survey_detail->option   =  json_encode($valor);
           $survey_detail->state   =   $request->state;
  $survey_detail->requerid   =   $request->requerid;
 

     $survey_detail->enumeration   =   "0";
       $survey_detail->initialize   =   "not";
    $survey_detail->selection_id   =   $request->selection_id;
  $survey_detail->category   =   "all";
  $survey_detail->evaluate   =   $request->evaluate;




       
     $survey_detail->save();

   return $this->create();
     
    }

    /**
     * Display the specified resource.
     */
    public function show(SurveyDetail $surveyDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $survey_detail = SurveyDetail::find($request->id);
        return $survey_detail;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
            $survey_detail = SurveyDetail::find($request->id);
        $survey_detail->question = $request->question_edit;
        $survey_detail->detail = $request->detail_edit;
           $survey_detail->detail_2 = $request->detail_2_edit;
           $survey_detail->detail_3 = $request->detail_3_edit;
           $survey_detail->correct = $request->correct_edit;
           $survey_detail->evaluate = $request->evaluate_edit;
           $survey_detail->point = $request->point_edit;
           $survey_detail->title = $request->title_edit;
                  $survey_detail->category = $request->category_edit;
                         $survey_detail->enumeration = $request->enumeration_edit;
        $survey_detail->save();
        return $this->create();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
             SurveyDetail::find($request->id)->delete();
        return $this->create();
    }
}
