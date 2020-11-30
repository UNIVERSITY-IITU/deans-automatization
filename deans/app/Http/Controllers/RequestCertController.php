<?php

namespace App\Http\Controllers;
use App\Models\Certification;
use App\Models\Cerf_Type;

use App\Models\Nationality;
use App\Models\Speciality;
use App\Models\Stream;
use App\Models\Type_Study;
use App\Models\Student;

use App\Models\Request_cert;
use Illuminate\Http\Request;

class RequestCertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $cerf=Certification::all();
        // $requestCert=Request_cert::all();
        // $cerf_Type=Cerf_Type::all();
        // $students=Student::all();

        // return view('formsprav.index',['requestCert'=>$requestCert,'cerf'=>$cerf,'cerftype'=>$cerf_Type,'students'=>$students]);
    }
    public function indexStudent()
    {
        //
       
        $requestCert=Request_cert::where('student_id',1)->get();
        $cerf_Type=Cerf_Type::all();
        $student=Student::find(1);
        $cerf=Certification::all();

        return view('pages.mysprav',['reqcer'=>$requestCert,'cerf'=>$cerf,'cerftype'=>$cerf_Type,'student'=>$student]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $cerf = Certification::find($id);
        $student=Student::findOrFail(1);
        $nationality=Nationality::all();
        $speciality=Speciality::all();
        $stream=Stream::all();
        $typeStudy=Type_Study::all();
        return view('pages.formsprav',['student'=>$student,'nationality'=>$nationality,
        'speciality'=>$speciality,'stream'=>$stream,'typeStudy'=>$typeStudy,'cerf'=>$cerf]);
    }
    public function listRequest()
    {
        //
        $cerf = Certification::all();
        $students=Student::all();
        $requestCert=Request_cert::all();
        $cerf_Type=Cerf_Type::all();
        $stream=Stream::all();
        return view('pages.request',['cerf'=>$cerf,'students'=>$students,'requestCert'=>$requestCert,'cerf_Type'=>$cerf_Type,'stream'=>$stream]);
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
        $requestCert=new Request_cert();
        $requestCert->is_approved = false;
        $requestCert->student_id =$request->student_id;
        $requestCert->cert_id =$request->cert_id;
        $requestCert->curr_date =date("Y-m-d");
        $requestCert->save();
        return redirect('/student/cert')
            ->with('success', 'Object created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Request_cert  $request_cert
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
       
        $cert = Certification::find();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Request_cert  $request_cert
     * @return \Illuminate\Http\Response
     */
    public function edit(Request_cert $request_cert)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Request_cert  $request_cert
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $is_app='';
        $id=$request->id;
        $cert = Request_cert::find($id);
        $cert->is_approved=True;
        $cert->curr_date=date("Y-m-d");
        $cert->save();
        error_log($cert);
        return redirect('/listRequest')
            ->with('success', 'Object updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Request_cert  $request_cert
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $request_cert = Request_cert::findOrFail($id);
        $request_cert->delete();

        return redirect('/listRequest')
            ->with('success', 'Object deleted successfully');
    }
}
