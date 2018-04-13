<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //Crud

    function read( $id , $name = null ){
        if ($name == null){
           return "ID: " . $id . " nombre: ninguno " ;
        }else{
           return "ID: " . $id . " nombre: " . $name;
        }
   }

   function lista(){
       $list_of_users = [
        'Juan Sanches',
        'Marcelo Uruña',
        'Ramiro Vazques',
        'Jose luis'
       ];
       return view( 'users' , [
           'list_of_users' => $list_of_users
       ] );
   }

}
