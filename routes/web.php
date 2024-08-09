<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/helloworld', function () {
    return view('helloWorld');
});
