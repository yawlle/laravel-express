<?php

namespace App\Http\Controllers;

use App\Models\Teste2;
use Illuminate\Http\Request;

class Teste2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "Ola doideiras";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
     * @param  \App\Models\Teste2  $teste2
     * @return \Illuminate\Http\Response
     */
    public function show(Teste2 $teste2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teste2  $teste2
     * @return \Illuminate\Http\Response
     */
    public function edit(Teste2 $teste2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teste2  $teste2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teste2 $teste2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teste2  $teste2
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teste2 $teste2)
    {
        //
    }
}
