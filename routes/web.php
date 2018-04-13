<?php

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get( '/inicio' , 'InitController@index');

Route::get( '/home' ,'HomeController');

//Route::get( '/usuarios',function(){
//    return "ID: " . $_GET['id'] . " nombre: " . $_GET['name'];
//});

Route::get( '/usuarios' , 'UserController@lista') ;
Route::get( '/usuarios/{id}/{name?}' , 'UserController@read' );