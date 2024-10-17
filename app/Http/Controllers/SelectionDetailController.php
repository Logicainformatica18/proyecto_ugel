<?php

namespace App\Http\Controllers;

use App\Models\SelectionDetail;
use App\Models\Selection;
use App\Http\Requests\StoreSelectionDetailRequest;
use App\Http\Requests\UpdateSelectionDetailRequest;
use Illuminate\Http\Request;

class SelectionDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
                    $selection = Selection::where('id','=',$id)->orderBy('description','asc')->get();;   
            return view("selection_detailtable", compact("selection"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $selection_detail = new SelectionDetail;
        $selection_detail->description =    $request->description;
        $selection_detail->detail =         $request->detail;
          $selection_detail->selection_id =         $request->primary;
             $selection_detail->associate_detail_id =         $request->associate_detail_id;
        $selection_detail->save();
       return $this->create($request->primary);
       
    
    }

    /**
     * Display the specified resource.
     */
    public function show(SelectionDetail $selectionDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
             $selection = Selection::find($request["id"]);
           return view("selection_detailtable", compact("selection"));
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSelectionDetailRequest $request, SelectionDetail $selectionDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
 SelectionDetail::find($request->id)->delete();
       return $this->create($request->primary);
    }
}
