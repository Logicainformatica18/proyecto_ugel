<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Report;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use Illuminate\Http\Request;
class ClientController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
           
    
if ($request->state =="private" && $request->code=="researcH35920184" &&$request->date_end!="true") {
       $client = new Client;
$client->save();
        $report = new Report;
        $report->client_id = $client->id;
        $report->description = "";
        $report->detail = "";
        $report->save();



        return $client->id;

}
else if($request->state=="public" &&$request->date_end!="true"){
    
     $client = new Client;
$client->save();
        $report = new Report;
        $report->client_id = $client->id;
        $report->description = "";
        $report->detail = "";
        $report->save();



        return $client->id;
       
}
else{
     return "denegado";
}


 

      
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientRequest $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        //
    }
}
