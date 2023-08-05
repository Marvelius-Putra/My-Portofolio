<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function portofolio(){
        return view('pages.portofolio');
    }

    public function college(){
        return view('pages.college');
    }

    // public function description(){
    //     return view('pages.description');
    // }
}
