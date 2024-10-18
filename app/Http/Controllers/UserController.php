<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
// con esto le damos roles a los usuarios
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;

use Laravel\Sanctum\HasApiTokens;

class UserController extends Controller
{
    use HasApiTokens, Notifiable;
    use HasRoles;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::orderBy('id','DESC')->get();
        $roles = Role::all();
        return view('user', compact('user', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::orderBy('id','DESC')->get();
        return view('usertable', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->datebirth = datebirth($request->day, $request->month, $request->year);

        try {
            $user = new User();
            $user->dni = $request->dni;
            $user->firstname = $request->firstname;
            $user->lastname = $request->lastname;
            $user->names = $request->names;
       //     $user->password =  Hash::make($request->password);
      //      $user->datebirth = $request->datebirth;
            $user->cellphone = $request->cellphone;
         
            //photo
            // if ($request->file('photo') != null) {
            //     $request->photo = photoStore($request->file('photo'), "imageusers");
            //     $user->photo = $request->photo;
            // }
            $user->email = $request->email;
            $user->sex = $request->sex;
            $user->description = $request->description;
            $user->ruc = $request->ruc;
            $user->save();

        } catch (\Exception $e) {
            // do task when error
            //   return  $e->getMessage();   // insert query
            return "<div style='background-color:red'> ERROR</div>";
        }
        return $this->create();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $show = "%" . $request["show"] . "%";
        $user = User::where('firstname', "like", $show)->all();
        return view('usertable', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $user =  User::find($request["id"]);
        // foreach ($user->roles_ as $key => $valor) {
        //     $user->role_name=  $valor->name;
        // }

            return $user;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->datebirth = datebirth($request->day, $request->month, $request->year);

        if ($request->photo == "") {
            $users = User::find($request->id);
            $users->dni = $request->dni;
            $users->firstname = $request->firstname;
            $users->lastname = $request->lastname;
            $users->names = $request->names;
      //      $users->datebirth = $request->datebirth;
            $users->cellphone = $request->cellphone;
            $users->email = $request->email;
     //       $users->sex = $request->sex;
    
            $users->description = $request->description;
            $users->ruc = $request->ruc;

            $users->save();
        } else {
            $table = User::find($request["id"]);
    //        photoDestroy($table->photo, "imageusers");
     //       $request->photo = photoStore($request->file('photo'), "imageusers");
            $users = User::find($request->id);
            $users->dni = $request->dni;
            $users->firstname = $request->firstname;
            $users->lastname = $request->lastname;
            $users->names = $request->names;
     //       $users->datebirth = $request->datebirth;
            $users->cellphone = $request->cellphone;
            $users->email = $request->email;
    //       $users->sex = $request->sex;
    //        $users->photo = $request->photo;
            $users->description = $request->description;
            $users->ruc = $request->ruc;
            $users->save();
        }
        return   $this->create();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $table = User::find($request["id"]);
        photoDestroy($table->photo, "imageusers");
        User::find($request["id"])->delete();
        return   $this->create();
    }
    public function updateProfile(Request $request)
    {
        $request->datebirth = datebirth($request->day, $request->month, $request->year);
        if ($request->photo == "") {
            $users = User::find($request->id);
            $users->datebirth = $request->datebirth;
            $users->cellphone = $request->cellphone;

            $users->save();
        } else {
            $table = User::find($request["id"]);
            photoDestroy($table->photo, "imageusers");
            $request->photo = photoStore($request->file('photo'), "imageusers");
            $users = User::find($request->id);
            $users->datebirth = $request->datebirth;
            $users->cellphone = $request->cellphone;
            $users->photo = $request->photo;
            $users->save();
        }
    }

    public function userRoleEdit(Request $request)
    {

        $user = User::find($request->id);
        return view("user_roletable", compact("user"));
    }
    public function userRoleDestroy(Request $request)
    {
       // return $request->id;
        $user=User::find($request->id);
        try {
            $user->removeRole($request->role_name);
        } catch (\Exception $th) {
            return $th->getMessage();
        }

        return $this->userRoleTable($request->id);
    }
    public function userRoleStore(Request $request)
    {

        $user = User::find($request->id);
        $user->assignRole($request->role);
        return view("user_roletable", compact("user"));
    }
    public function userRoleTable($id)
    {

        $user = User::find($id);
        return view("user_roletable", compact("user"));
    }

}
