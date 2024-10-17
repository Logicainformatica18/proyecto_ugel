<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certification;
use App\Models\RegistryDetail;
use App\Http\Requests\StoreCertificationRequest;
use App\Http\Requests\UpdateCertificationRequest;
use Illuminate\Support\Facades\Session;

class CertificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
           $registry_detail_id = Session::get('registry_detail_id');
            $certification= Certification::where('registry_detail_id','=',$registry_detail_id)->orderBy('id','DESC')->get();
        return view("certification_maintenance", compact('certification'));


    }

    public function report(Request $request,$registry_detail_id,$language,$code_certification)
    {
       // return $id." ".$id1;
        //
          //$registry_detail_id = Session::get('registry_detail_id');

         $id =explode("=",$registry_detail_id);
         $language = explode("=",$language);
        $language = $language[1];

        $code_certification = explode("=",$code_certification);
        $code_certification = $code_certification[1];
          //$registry_detail = RegistryDetail::find($id[1]);
//actualizar campo code_certification
  $registry_detail =  RegistryDetail::find($id[1]);
    $registry_detail->code_certification = $code_certification;
$registry_detail->save();




      return view("certification",compact("registry_detail","language"));



    }

    public function savePhoto(Request $request)
    {

//     Decodificar la cadena base64
$imageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $request->id));

// Nombre del archivo de salida
$filename = 'storage/certificados/r/edicion/40/'.$request->code_certification.".png";
// Guardar la imagen en un archivo
file_put_contents($filename, $imageData);

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
    public function store(StoreCertificationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Certification $certification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Certification $certification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCertificationRequest $request, Certification $certification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Certification $certification)
    {
        //
    }
        public function studentCertification()
    {
        //
        return "hola";
    }
}
