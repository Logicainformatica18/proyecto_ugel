<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;
class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type = Type::orderBy('id','DESC')->get();
        return view("type", compact("type"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type = Type::orderBy('id','DESC')->get();
        return view("typetable", compact("type"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $type = new Type;
        $type->description = $request->description;
        $type->detail = $request->detail;
      $type->save();
       return $this->create();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $show="%".$request["show"]."%";
        $type=Type::where('description',"like",$show)->all();
        return view('typetable',compact('type'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $type = Type::find($request->id);
        return $type;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $type = Type::find($request->id);
        $type->description = $request->description;
        $type->detail = $request->detail;
        $type->save();
        return $this->create();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Type::find($request->id)->delete();
        return $this->create();
    }
}
