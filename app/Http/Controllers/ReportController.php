<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Http\Requests\StoreReportRequest;
use App\Http\Requests\UpdateReportRequest;
use App\Models\SurveyClient;
use App\Models\Survey;
use App\Models\SurveyDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index(Request $request)
    {
      
   $survey = Survey::find($request->survey_id);
$ids = DB::table('survey_details')->where('survey_id', "=", $request->survey_id)->pluck('id');
$question = DB::table('survey_details')->where('survey_id', "=", $request->survey_id)->pluck('question');

        $selects = ['sc.client_id','re.description','re.detail'];



foreach ($ids as $id) {
   // $selects[] = DB::raw("(SELECT MAX(sd.created_at) FROM survey_details sd WHERE sd.survey_id = " . $request->survey_id . ") as created_at");
    $selects[] = DB::raw("MAX(CASE WHEN sd.id =" . $id . " THEN sc.updated_at END) as 'updated_at" . $id . "'");
    $selects[] = DB::raw("MAX(CASE WHEN sd.id =" . $id . " THEN sc.answer END) as 'pregunta" . $id . "'");
}

$havings = [];
foreach ($ids as $id) {
    $havings[] = "MAX(CASE WHEN sd.id =" . $id . " THEN sc.answer END) IS NOT NULL";
}

$results = DB::table('survey_clients as sc')
    ->join('survey_details as sd', 'sc.survey_detail_id', '=', 'sd.id')
    ->join('clients as c', 'c.id', '=', 'sc.client_id')
     ->join('reports as re', 'c.id', '=', 're.client_id')
    ->groupBy('sc.client_id','re.description','re.detail') // Incluye sc.created_at en el GROUP BY
    ->havingRaw(implode(' or ', $havings)) // Combina las condiciones con OR
    ->orderBy('sc.client_id', 'desc')
    ->select($selects)
    ->get();

return view('report', compact("survey", "results", "ids", "question"));




/*
QUEY SQL

SELECT 
  sc.client_id, 
  MAX(CASE WHEN sd.id = '4' THEN sc.answer END)  as '4',
  MAX(CASE WHEN sd.id = '5' THEN sc.answer END)  as '5',
  MAX(CASE WHEN sd.id = '6' THEN sc.answer END) as '6',
 MAX(CASE WHEN sd.id = '7' THEN sc.answer END) as '7'
FROM survey_clients sc 
INNER JOIN survey_details sd ON sc.survey_detail_id = sd.id
where sd.survey_id = 2
GROUP BY sc.client_id
ORDER BY sc.client_id DESC;

*/


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $criterio = $request->columns;
        $criterio = explode(",",$request->columns);
        
   //     $survey_detail =DB::select("select id,question from survey_details where survey_id =1");

       



// Ahora $results contiene tus resultados



//return print_r($results);
       
        //return view("reporttable",compact("results"));
    }

    /**
     * Display the specified resource.
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
       $report = Report::where("client_id","=",$request->id)->get();
// return $report[0];
try {
  return $report[0];
} catch (\Throwable $th) {
    
}
       

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
          $report = Report::find($request["id"]);
        $report->description = $request["description"];
        $report->detail = $request["detail"];
       return $report->save();
 //       return $request->id;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
           SurveyClient::where("client_id","=",$request->id)->delete();
       // return $this->create();
    }
}
