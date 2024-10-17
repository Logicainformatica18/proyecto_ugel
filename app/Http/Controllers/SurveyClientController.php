<?php

namespace App\Http\Controllers;

use App\Models\SurveyClient;
use App\Models\Client;
use App\Models\SurveyDetail;
use Illuminate\Support\Facades\Route;

use App\Models\SelectionDetail;
use App\Models\Survey;
use App\Http\Requests\StoreSurveyClientRequest;
use App\Http\Requests\UpdateSurveyClientRequest;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\AgradecimientoEmail;

class SurveyClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $survey_count =SurveyDetail::where("survey_id","=", $request->survey_id)->where("visible","=","yes")->count();
            $survey = Survey::find($request->survey_id);
          $survey_detail = SurveyDetail::where("survey_id","=", $request->survey_id)->where("visible","=","yes")->orderBy('created_at','asc')->get();
       

       

          if ($survey->type=="encuesta") {
            return view('survey_client',compact("survey_detail","survey","survey_count"));
          }
          else{
           return view('file_client',compact("survey_detail","survey","survey_count"));
          }
     
            
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
 


            $survey_client = new SurveyClient;
         $survey_client->survey_detail_id = $request->survey_detail_id;
        $survey_detail = SurveyDetail::where('id','=',$request->survey_detail_id)->get();

          $survey_client->client_id = $request->client_id;

         $option_rpta = explode("-", $request->option);
        $option_1 = $option_rpta[0];
        $correct =$survey_detail[0]->correct;
       


        if ($option_1 == $correct &&$survey_detail[0]->evaluate=="yes" &&$request->type=="multiple_option") {
            $survey_client->option = json_encode($request->option);
            $survey_client->answer = 2; 
        }
        else if($option_1 != $correct &&$survey_detail[0]->evaluate=="yes" &&$request->type=="multiple_option"){
              $survey_client->option = json_encode($request->option);
            $survey_client->answer = 0; 
        }
        else if($survey_detail[0]->evaluate=="not" &&$request->type=="multiple_option"){
                   $survey_client->answer = $request->option; 
        
        }
        else{
    $survey_client->option = json_encode("");
        }


    
      




         if ($request->type == "file" && $request->hasFile('answer')) {
    $file = $request->file('answer'); // Obtener el archivo del input

    $destinationPath = 'storage'; // Cambiar esto al directorio donde deseas guardar los archivos
    $fileName = 'doc-'.time() . '_' . $file->getClientOriginalName(); // Generar un nombre de archivo único

    $file->move($destinationPath, $fileName); // Mover el archivo a la carpeta destino

    $survey_client->answer = $fileName; // Almacenar el nombre del archivo en la propiedad
}

// Resto de tu código...


              if ($request->type=="short_answer") {
                  $survey_client->answer = $request->answer;
                }
                else {
             //   $survey_client->answer = "";
          
            }
                   if ($request->type=="email") {
                  $survey_client->answer = $request->answer;
                  //enviar a correo agradecimiento
                   // Enviar correo de agradecimiento
    Mail::to($request->answer)->send(new AgradecimientoEmail());
                }
                else {
             //   $survey_client->answer = "";
          
            }
              if ($request->type=="date") {
                  $survey_client->answer = $request->date;
                }
                else {
             //   $survey_client->answer = "";
            }
               if ($request->type=="selection") {
            $selection_detail_id = explode("-", $request->selection_detail_id);

                  $survey_client->selection_detail_id = $selection_detail_id[0];
                     $survey_client->answer = $request->selection_detail_id;

                }
                else {
       
            }
            
      

             $survey_client->save();
 // return $this->create();
    }

    public function associate_show(Request $request)
    {
        
           $criterio=  explode("-", $request->id);
        $criterio = $criterio[0];
        $survey_details = SelectionDetail::where("associate_detail_id", "=", $criterio)->get();
            
            return view("survey_clienttable_select",compact('survey_details'));
          
    }

    /**
     * Display the specified resource.
     */
    public function show(SurveyClient $surveyClient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SurveyClient $surveyClient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSurveyClientRequest $request, SurveyClient $surveyClient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SurveyClient $surveyClient)
    {
        //
    }
}
