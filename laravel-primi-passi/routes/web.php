<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {

  $navbar = [ 'Chi siamo', 'Contatti','Catalogo'];
    return view('welcome',compact('navbar'));


});
