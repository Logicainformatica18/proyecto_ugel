<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role= Role::orderBy('id','DESC')->get();
        $permission= Permission::all();
        return view("role", compact("role",'permission'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = Role::orderBy('id','DESC')->get();
        return view("roletable", compact("role"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // create role
        $role = new Role;
        $role->name = $request->name;
        // asignar role
        $role->syncPermissions("administrar");
        $role->save();
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
        $show="%".$request["show"]."%";
        $role=Role::where('name',"like",$show)->all();
        return view('roletable',compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $role = Role::find($request->id);
        return $role;
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
        $role = Role::find($request->id);
        $role->name = $request->name;
        $role->save();
        return $this->create();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        Role::find($request->id)->delete();
        return $this->create();
    }
    public function rolePermissionEdit(Request $request)
    {

        $role = Role::find($request->id);
        //return view("role_permissiontable", compact("role"));
        return "hola";
    }
    public function rolePermissionDestroy(Request $request)
    {

        $role=Role::find($request->id);
        $role->revokePermissionTo($request->permission_name);

        return $this->rolePermissionTable($request->id);
    }
    public function rolePermissionStore(Request $request)
    {

        $role = Role::find($request->id);

        $role->givePermissionTo($request->permission);
        return view("role_permissiontable", compact("role"));
    }
    public function rolePermissionTable($id)
    {

        $role = Role::find($id);
        return view("role_permissiontable", compact("role"));
    }

}
