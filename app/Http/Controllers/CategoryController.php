<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $category = Category::orderBy('id','DESC')->get();
        return view("category", compact("category"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category = Category::orderBy('id','DESC')->get();
        return view("categorytable", compact("category"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category;
        $category->description = $request->description;
        $category->detail = $request->detail;
        $category->save();
        return $this->create();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $show="%".$request["show"]."%";
        $category=Category::where('description',"like",$show)->all();
        return view('categorytable',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
  
    public function edit(Request $request)
    {
        //
        $category = Category::find($request->id);
        return $category;
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request)
    {
        $category = Category::find($request->id);
        $category->description = $request->description;
        $category->detail = $request->detail;
        $category->save();
        return $this->create();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Category::find($request->id)->delete();
        return $this->create();
    }
}
