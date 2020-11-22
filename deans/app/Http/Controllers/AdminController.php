<?php

namespace App\Http\Controllers;
use Dompdf\Dompdf;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
         // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml('Aqzhol i/m hero');

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream('hello.pdf');
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
