<?php

namespace App\Http\Controllers;

use App\Models\Certification;
use App\Models\Cerf_Type;
use Illuminate\Http\Request;

class CertificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cerf=Certification::all();

        $cerf_Type=Cerf_Type::all();

        return view('certification.index',['cerf'=>$cerf,'cerftype'=>$cerf_Type]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cerf_Type=Cerf_Type::all();
        return view('certification.create',['cerfType'=>$cerf_Type]);
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
        $cerf=new Certification();
        $cerf->uni_logo=request('uni_logo');
        $cerf->uni_organization=request('uni_organization');
        $cerf->title=request('title');
        $cerf->paragraph=request('paragraph');
        $cerf->type_cerf_id=request('cerfType_id');
        $cerf->main_part=request('main_part');
        $cerf->license=request('license');
        
    
        $cerf->save();
        error_log($cerf);
        return redirect('/cerf')->with('success', 'Object created successfully.');;   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $cerf_Type=Certification::findOrFail($id);

        return view('cerf.show', ['cerfType'=>$cerf_Type]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $cerf=Certification::findOrFail($id);
        $cerf_Type=Cerf_Type::all();

        return view('certification.edit', ['cerfType'=>$cerf_Type,'cerf'=>$cerf]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $id=$request->id;
        $cerf = Certification::find($id);
        $cerf->uni_logo=request('uni_logo');
        $cerf->uni_organization=request('uni_organization');
        $cerf->title=request('title');
        $cerf->paragraph=request('paragraph');
        $cerf->type_cerf_id=request('cerfType');
        $cerf->main_part=request('main_part');
        $cerf->license=request('license');
        $cerf->save();
        error_log($cerf);
        return redirect('/cerf')->with('success', 'Object created successfully.');;   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $cerf = Certification::findOrFail($id);
        $cerf->delete();

        return redirect('/cerf')
            ->with('success', 'Object deleted successfully');
    }
}
