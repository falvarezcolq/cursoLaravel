<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InitController extends Controller
{
    //
    function index(){
        //return 'Hola mundo';
        return view('inicio');
    }

    
}
