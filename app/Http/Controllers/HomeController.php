<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){
        return view('home');
    }
    public function contacto(){
        return view('contacto');
    }
    public function servicios(){
        return view("services");
    }
    
    public function resultados(){
        return redirect()->away('');
    }
    public function Quimica(){
        return view("quimica");
    }
    
}
