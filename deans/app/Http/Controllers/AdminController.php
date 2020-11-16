<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('pages/indexAdmin');
    }
    public function addPages(){
        return view('pages/add');
    }
    public function detail(){
        return view('pages/detail');
    }
    public function request(){
        return view('pages/request');
    }
}
