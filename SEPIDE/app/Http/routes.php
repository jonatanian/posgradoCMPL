<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/principal', function () {
    return view('posgrado.principal');
});

Route::get('/proyectos', function () {
    return view('posgrado.proyectos');
});

Route::get('/publicaciones', function () {
    return view('posgrado.publicaciones');
});

Route::get('/congresos', function () {
    return view('posgrado.congresos');
});

Route::get('/agregar_proyecto', function () {
    return view('posgrado.agregar_proyecto');
});

Route::get('/agregar_publicacion', function () {
    return view('posgrado.agregar_publicacion');
});

Route::get('/agregar_congreso', function () {
    return view('posgrado.agregar_congreso');
});