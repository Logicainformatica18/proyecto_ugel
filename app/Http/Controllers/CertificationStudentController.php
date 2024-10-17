<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Certificate;
use App\Models\RegistryDetail;
class CertificationStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
 //
    $certificate=Certificate::all();



     $user = Auth::user();
     $user = $user->model_has_roles;
     $registry_detail=  RegistryDetail::where('student_m',"=",$user[0]->model_id)->get();

     return view('student/certificate_student',compact('certificate','registry_detail'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
