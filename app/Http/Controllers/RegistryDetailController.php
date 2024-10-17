<?php

namespace App\Http\Controllers;

use App\Models\RegistryDetail;
use App\Http\Requests\StoreRegistryDetailRequest;
use App\Http\Requests\UpdateRegistryDetailRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Registry;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use App\Helpers;
class RegistryDetailController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//variable creadas en sesion
        $registry_id = Session::get('registry_id');
        $registry = Registry::find($registry_id);
        $registry_detail = RegistryDetail::where("registry_id","=",$registry_id)->get();

        //$student = Student::all();

        $student =DB::select("select u.firstname,u.lastname,u.names,m.model_id,m.model_type,m.role_id from users u
        inner join model_has_roles m on u.id = m.model_id where role_id=5");


       return view('registry_detail',compact('registry_id','registry_detail','student','registry'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $registry_id = Session::get('registry_id');

        $registry_detail = RegistryDetail::where("registry_id","=",$registry_id)->get();

        return view('registry_detailtable',compact('registry_detail'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $registry_detail = new RegistryDetail;
        $student =explode("-", $request->student) ;

        $registry_detail->student_m = $student[0];
      $registry_detail->student_t = $student[1];
        $registry_detail->student_r = $student[2];

      $registry_id = Session::get('registry_id');

        $registry_detail->registry_id   =   $registry_id;


      $registry_detail->save();

    return $this->create();
    // return   "rrfr" ;
    }

    /**
     * Display the specified resource.
     */
    public function show(RegistryDetail $registryDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $registry_detail = RegistryDetail::find($request->id);
        return $registry_detail;
    }
    public function registry_detail(Request $request)
    {
       return Session::put('registry_id',$request->id );
        //return redirect()->route('registros_mantenimiento');
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $registry_detail =  RegistryDetail::find($request->id);
        $registry_detail->n1 = $request->n1;
        $registry_detail->n2 = $request->n2;
        $registry_detail->n3 = $request->n3;

     $registry_detail->save();
        return $this->create();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        RegistryDetail::find($request->id)->delete();
        return $this->create();
    }

        public function certificationGenerate(Request $request)
    {

      // $registry_detail =  RegistryDetail::find($request->id);
            return Session::put('registry_detail_id',$request->id );

      //return view("certification");
    }
}
