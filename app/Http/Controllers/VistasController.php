<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VistasController extends Controller
{
    function index(){
        return view('sitio.layaout.template');
    }


    public function about(){
        return view('sitio.pages.about');
    }

    public function contactanos(){
        return view('sitio.pages.contactanos');
    }

    public function chat(){
        return view('sitio.pages.chat');
    }



}
