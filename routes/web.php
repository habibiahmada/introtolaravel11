<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('/form-signup', function () {
    return view('form');
})->name('form.signup');


Route::get('/welcome', function () {
  return view('welcome');  
})->name('welcome');