<?php

namespace App\Http\Controllers;

use App\Models\CertificationTypes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CertificationTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $certificationTypes = CertificationTypes::all();

        return view('certificationTypes.index', compact('certificationTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('certificationTypes.create');
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
        $request->validate([
            'name' => 'required'
        ]);

        CertificationTypes::create($request->all());

        return redirect()->route('certificationTypes.index')
            ->with('success', 'Project created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CertificationTypes  $certificationTypes
     * @return \Illuminate\Http\Response
     */
    public function show(CertificationTypes $certificationTypes)
    {
        //
        return view('certificationTypes.show', compact('certificationTypes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CertificationTypes  $certificationTypes
     * @return \Illuminate\Http\Response
     */
    public function edit(CertificationTypes $certificationTypes)
    {
        //
        return view('certificationTypes.edit', compact('certificationTypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CertificationTypes  $certificationTypes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CertificationTypes $certificationTypes)
    {
        //
        $request->validate([
            'name' => 'required'
        ]);
        $certificationTypes->update($request->all());

        return redirect()->route('certificationTypes.index')
            ->with('success', 'Project updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CertificationTypes  $certificationTypes
     * @return \Illuminate\Http\Response
     */
    public function destroy(CertificationTypes $certificationTypes)
    {
        //
        $certificationTypes->delete();

        return redirect()->route('certificationTypes.index')
            ->with('success', 'Project deleted successfully');
    }
}
