<?php

namespace App\Http\Controllers;

use App\Models\Pay;
use App\Models\Type;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
class PayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pay = Pay::orderBy('id','DESC')->get();
        $type = Type::orderBy('id','ASC')->get();
        $user = User::orderBy('id','ASC')->get();
        $category = Category::orderBy('id','ASC')->get();
        return view("pay", compact("pay","type","category","user"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pay = Pay::orderBy('id','DESC')->get();
        return view("paytable", compact("pay"));
    }
    public function compare(Request $request)
    {
        $pay = Pay::where(function($query) use ($request) {
            $query->where("user_id", $request->user_option_1)
                  ->orWhere("user_id", $request->user_option_2)
                  ->orWhere("user_id", $request->user_option_3);
        })
        ->whereBetween("date_solicitud", [$request->date_start, $request->date_end])
        ->get();

        return view("paytable", compact("pay"));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pay = new Pay;
        $pay->category_id = $request->category_id;
        $pay->type_id = $request->type_id;
        $pay->user_id = $request->user_id;
        $pay->description = $request->description;
        $pay->money = $request->money;
        $pay->type_money = $request->type_money;
        $pay->cantidad = $request->cantidad;
        $pay->igv =$request->money * 0.18 * $request->cantidad;
        $pay->date_solicitud = $request->date_solicitud;
        $pay->date_recepcion = $request->date_recepcion;
        $pay->constancia = $request->constancia;
        $pay->ganador = $request->ganador;
        $pay->save();
        return $this->create();
       // return $request->user_id;
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
  
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $pay = Pay::find($request->id);
        return $pay;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $pay = Pay::find($request->id);

       $pay->category_id = $request->category_id;
        $pay->type_id = $request->type_id;
        $pay->user_id = $request->user_id;
        $pay->description = $request->description;
        $pay->money = $request->money;
        $pay->type_money = $request->type_money;
        $pay->igv =$request->money * 0.18;
        $pay->cantidad = $request->cantidad;
        $pay->date_solicitud = $request->date_solicitud;
        $pay->date_recepcion = $request->date_recepcion;
        $pay->constancia = $request->constancia;
        $pay->ganador = $request->ganador;
        $pay->save();
        return $this->create();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Pay::find($request->id)->delete();
        return $this->create();
    }
}
