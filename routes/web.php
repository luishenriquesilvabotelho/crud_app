<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/helloworld', function () {
    return view('helloWorld');
});
Route::get('/home', function () {
    return view('Home');
});
Route::get('/listar-pedidos', function () {
    return view('ListarPedidos');
});
Route::get('/listar-produtos', function () {
    return view('ListarProdutos');
});

// teste