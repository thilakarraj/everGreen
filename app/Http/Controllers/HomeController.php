<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \PDF;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$a = config('constants.options');
        print_r($a);*/

        return view('home');
    }

    public function downloadPDF()
    {
        // load page to pdf
        // $pdf = PDF::loadView('pdfView');
        // html to pdf
        $pdf = PDF::loadHTML('<h1>Testss</h1>');
        return $pdf->download('invoice.pdf');
        // $pdf->download('invoice.pdf');
        // display pdf
        // return $pdf->stream();

    }

    public function sams()
    {
        /*$a = config('constants.options');
        print_r($a);*/

        return view('sams');
    }
}
