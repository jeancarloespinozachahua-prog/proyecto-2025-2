<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludos', function () {
    return 'hola amiguitos';
});

Route::get('/saludos', function () {
    return 'bienvenidos';
});