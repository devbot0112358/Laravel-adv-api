<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Custormer;
use Illuminate\Http\Request;

class Customer extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Custormer  $custormer
     * @return \Illuminate\Http\Response
     */
    public function show(Custormer $custormer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Custormer  $custormer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Custormer $custormer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Custormer  $custormer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Custormer $custormer)
    {
        //
    }
}
