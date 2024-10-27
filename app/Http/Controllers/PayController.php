<?php

namespace App\Http\Controllers;

use App\Models\Pay;
use App\Http\Requests\StorePayRequest;
use App\Http\Requests\UpdatePayRequest;

class PayController extends Controller
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
    public function store(StorePayRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pay $pay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pay $pay)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePayRequest $request, Pay $pay)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pay $pay)
    {
        //
    }
}
