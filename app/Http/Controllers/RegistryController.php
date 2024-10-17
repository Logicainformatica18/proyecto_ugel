<?php

namespace App\Http\Controllers;

use App\Models\Registry;
use App\Http\Requests\StoreRegistryRequest;
use App\Http\Requests\UpdateRegistryRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Model_has_role;
use App\Models\Course;
use App\Models\Schedule;
use App\Models\Assistant;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Model;
use Illuminate\Support\Facades\Session;
class RegistryController extends Controller{


    /**

     * Display a listing of the resource.
     */
    public function index()
    {
     //   $registry = Registry::orderBy('id','DESC')->get();
     /*
        $registry =DB::select("select r.*,u.firstname ,r.edition,u.lastname ,u.names,c.description as course,t.description as type, s.description as schedule  FROM registries r
        inner join model_has_roles m on
        m.model_id = r.teacher_m and m.model_type= r.teacher_t and m.role_id = r.teacher_r
        inner join users u on u.id = m.model_id
        inner join courses c on c.id = r.course_id
        inner join types t on t.id = c.type_id
        inner join schedules s on s.id = r.schedule_id order by r.id desc");
*/
        $schedule = Schedule::orderBy('description','asc')->get();
        $registry = Registry::all();

    $course = Course::orderBy('id','DESC')->get();
   // $model = Model_has_role::where('role_id','like','3')->get();
 //  $teacher =  Model::all();


        $teacher_new =DB::select("select u.firstname,u.lastname,u.names,m.model_id,m.model_type,m.role_id from users u
        inner join model_has_roles m on u.id = m.model_id where role_id=3");
        $assistant =Assistant::orderBy('description','asc')->get();

        // teacher_new = trae lista de profesores a asignar en un nuevo registro
        //teacher




        return view("registry", compact("registry","course","teacher_new","schedule","assistant"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $registry = Registry::all();

        return view("registrytable", compact("registry"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $registry = new Registry;
        $registry->description = $request->description;

        $teacher =explode("-", $request->teacher) ;


        $registry->teacher_m = $teacher[0];
      $registry->teacher_t = $teacher[1];
        $registry->teacher_r = $teacher[2];

        $registry->assistance_id =$request->assistance ;


      /*  $registry->coordination_m = $request->coordination_m;
        $registry->coordination_t = $request->coordination_t;
        $registry->coordination_r = $request->coordination_r;
*/
        $registry->course_id = $request->course;
        $registry->schedule_id = $request->schedule;
        $registry->hour_start = $request->hour_start;
        $registry->hour_end = $request->hour_end;
        $registry->fec_start = $request->fec_start;
        $registry->fec_end = $request->fec_end;
        $registry->detail = $request->detail;
        $registry->edition = $request->edition;
       $registry->type = $request->type;
         $registry->date_certification = $request->date_certification;
        $registry->save();
      //return print_r($registry);
      return $this->create();
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $registry = Registry::find($request->id);
       return $registry;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $registry = Registry::find($request->id);
        $registry->description = $request->description;
        $teacher =explode("-", $request->teacher) ;
        $registry->teacher_m = $teacher[0];
        $registry->teacher_t = $teacher[1];
        $registry->teacher_r = $teacher[2];
        $registry->assistance_id =$request->assistance ;
        $registry->course_id = $request->course;
        $registry->schedule_id = $request->schedule;
        $registry->hour_start = $request->hour_start;
        $registry->hour_end = $request->hour_end;
        $registry->fec_start = $request->fec_start;
        $registry->fec_end = $request->fec_end;
        $registry->detail = $request->detail;
           $registry->date_certification = $request->date_certification;
   $registry->type = $request->type;
        $registry->save();
        return $this->create();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Registry::find($request->id)->delete();
        return $this->create();
    }
}
