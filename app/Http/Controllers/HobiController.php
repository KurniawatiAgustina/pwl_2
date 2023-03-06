<?php

namespace App\Http\Controllers;

use App\Models\Hobi;
use App\Models\HobiModel;
use Illuminate\Http\Request;

class HobiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hobi = HobiModel::all();
        return view('hobi')
        ->with('hobi',$hobi);
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
     * @param  \App\Models\Hobi  $hobi
     * @return \Illuminate\Http\Response
     */
    public function show(Hobi $hobi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hobi  $hobi
     * @return \Illuminate\Http\Response
     */
    public function edit(Hobi $hobi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hobi  $hobi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hobi $hobi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hobi  $hobi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hobi $hobi)
    {
        //
    }
}
