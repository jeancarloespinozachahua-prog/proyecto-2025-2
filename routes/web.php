<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\view;
use App\Models\estudiante;

Route::get('/', function ():estudiante {
   
    $estudiante = new estudiante();
    $estudiante->nombres ='Jean';
    $estudiante->pri_epe ='Espinoza';
    $estudiante->seg_epe ='Chahua';
    $estudiante->save();

    return $estudiante;


    
    
    return view('welcome');
});

Route::get('/saludos', function (): string {
    return view('bienvenidos');
})->name('bienvenidos');

Route::get('/saludos', function (): string {
    return view('bienvenidos');
})->name('bienvenidos');



