<?php

namespace App\Http\Controllers;

use App\Models\DeanOffice;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeandOfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deanOffice = DeanOffice::latest()->paginate(2);

        // return view('projects.index', compact('deans'))
        // ->with('i', (request()->input('page', 1) - 1) * 5);
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
     * @param  \App\Models\DeanOffice  $deanOffice
     * @return \Illuminate\Http\Response
     */
    public function show(DeanOffice $deanOffice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DeanOffice  $deanOffice
     * @return \Illuminate\Http\Response
     */
    public function edit(DeanOffice $deanOffice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DeanOffice  $deanOffice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DeanOffice $deanOffice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DeanOffice  $deanOffice
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeanOffice $deanOffice)
    {
        //
    }
}
