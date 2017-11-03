<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getInicio(){

        return view('inicio');
    }
    public function getNosotros(){

        return view('nosotros');
    }
    public function getContacto(){

        return view('contacto');
    }
}
