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
    $nome = 'Dg';
    return view('meuPerfil', ['nome' => $nome]);
});

Route::get('/listarAlunos', function(){
    $nome1 = 'Marcos';
    $nome2 = 'Luis';
    $nome3= 'Dani';
    $nome4= 'Danzin';
    $arr = [1,2, 3, 4];
    return view('listarAlunos',  ['arr' => $arr])
    ->with("pessoa1", $nome1)
    ->with("pessoa2", $nome2)
    ->with("pessoa3", $nome3)
    ->with("pessoa4", $nome4);
});

