<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //@controller
    function __invoke(){
        //return 'Este es el HOME'; 
        return view('home');
    }
}
