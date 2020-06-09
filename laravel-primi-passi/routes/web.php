<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $test = "Main ";
    return view('welcome',compact('test');


});



Route::get('/', function () {
    return view('home');
});
