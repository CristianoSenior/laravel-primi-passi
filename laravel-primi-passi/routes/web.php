<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {

  $navbar = [ 'Chi siamo ', 'Contatti','catalogo'];
    return view('welcome',compact('navbar'));


});
