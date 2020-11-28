<?php

namespace App\Http\Controllers;
use App\Models\Certification;
use App\Models\Cerf_Type;
use App\Models\Student;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages/index');
    }

    public function faq(){
        return view('pages/faq');
    }
    // public function formsprav(){
    //     return view('pages/formsprav');
    // }
    public function formzaev(){
        return view('pages/formzaev');
    }
    public function login(){
        return view('pages/login');
    }

    public function mysprav(){
        return view('pages/mysprav');
    }
   
    public function myzaev(){
        return view('pages/myzaev');
    }
    public function sendspravka(){
        $cerf=Certification::all();
        $student=Student::where('id',1)->get();
        $cerf_Type=Cerf_Type::all();

        return view('pages.sendspravka',['cerf'=>$cerf,'cerftype'=>$cerf_Type]);
    }
    public function sendzaev(){
        return view('pages/sendzaev');
    }
}
