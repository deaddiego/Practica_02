<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { /*carpeta*/
    return view('welcome');
});

Route::get('/Administradores', function () { /*carpeta*/
    return view('Administradores.welcome_administradores');
});

Route::get('/Estudiantes', function () { /*carpeta*/
    return view('Estudiantes.welcome_estudiantes');
});

Route::get('/Profesores', function () { /*carpeta*/
    return view('Profesores.welcome_profesores');
});