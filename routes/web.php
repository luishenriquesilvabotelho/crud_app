<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
    return view('home');
}); 

Route::get('/cadastrar', function () {
    return view('cadastrar');
});

Route::get('/meuPerfil', function(){
    return view('meuPerfil');
});
