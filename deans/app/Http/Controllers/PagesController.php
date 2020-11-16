<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages/index');
    }

    public function faq(){
        return view('pages/faq');
    }
    public function formsprav(){
        return view('pages/formsprav');
    }
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
        return view('pages/sendspravka');
    }
    public function sendzaev(){
        return view('pages/sendzaev');
    }
}
