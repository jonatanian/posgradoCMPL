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

Route::get('/', ['middleware' => 'auth', function () {
    return redirect()->action('HomeController@index');
}]);

Route::get('/principal', 'HomeController@principal');

Route::get('/perfil', 'HomeController@perfil');


Route::get('/set_perfil', 'HomeController@set_perfil');
Route::post('/set_perfil', 'HomeController@create_perfil');
Route::get('/edit_perfil/{id}', 'HomeController@edit_perfil');
Route::post('/edit_perfil/{id}', 'HomeController@update_perfil');
/*
*
*Route group for proyectos
*
*/

Route::group(['prefix' => 'proyectos'], function () {
    Route::get('/', 'ProyectosController@index');
    Route::get('/agregar', 'ProyectosController@agregar');
    Route::get('/{id}', 'ProyectosController@detalles');
    Route::post('/agregar', 'ProyectosController@crear');
    Route::get('/editar/{id}','ProyectosController@editar');
    Route::post('/editar/{id}','ProyectosController@actualizar');
    Route::get('/eliminar/{id}', 'ProyectosController@eliminar');
});

Route::group(['prefix' => 'publicaciones'], function () {
    Route::get('/', 'PublicacionesController@index');
    Route::get('/agregar', 'PublicacionesController@agregar');
    Route::get('/{id}', 'PublicacionesController@detalles');
    Route::post('/agregar', 'PublicacionesController@crear');
    Route::get('/editar/{id}','PublicacionesController@editar');
    Route::post('/editar/{id}','PublicacionesController@actualizar');
    Route::get('/eliminar/{id}', 'PublicacionesController@eliminar');
});

Route::group(['prefix' => 'congresos'], function () {
    Route::get('/', 'CongresosController@index');
    Route::get('/agregar', 'CongresosController@agregar');
    Route::get('/{id}', 'CongresosController@detalles');
    Route::post('/agregar', 'CongresosController@crear');
    Route::get('/editar/{id}','CongresosController@editar');
    Route::post('/editar/{id}','CongresosController@actualizar');
    Route::get('/eliminar/{id}', 'CongresosController@eliminar');
});

Route::group(['prefix' => 'patentes'], function () {
    Route::get('/', 'PatentesController@index');
    Route::get('/agregar', 'PatentesController@agregar');
    Route::get('/{id}', 'PatentesController@detalles');
    Route::post('/agregar', 'PatentesController@crear');
    Route::get('/editar/{id}','PatentesController@editar');
    Route::post('/editar/{id}','PatentesController@actualizar');
    Route::get('/eliminar/{id}', 'PatentesController@eliminar');
});

Route::group(['prefix' => 'transferencias'], function () {
    Route::get('/', 'TransferenciasController@index');
    Route::get('/agregar', 'TransferenciasController@agregar');
    Route::get('/{id}', 'TransferenciasController@detalles');
    Route::post('/agregar', 'TransferenciasController@crear');
    Route::get('/editar/{id}','TransferenciasController@editar');
    Route::post('/editar/{id}','TransferenciasController@actualizar');
    Route::get('/eliminar/{id}', 'TransferenciasController@eliminar');
});

Route::group(['prefix' => 'conferencias'], function () {
    Route::get('/', 'ConferenciasController@index');
    Route::get('/agregar', 'ConferenciasController@agregar');
    Route::get('/{id}', 'ConferenciasController@detalles');
    Route::post('/agregar', 'ConferenciasController@crear');
    Route::get('/editar/{id}','ConferenciasController@editar');
    Route::post('/editar/{id}','ConferenciasController@actualizar');
    Route::get('/eliminar/{id}', 'ConferenciasController@eliminar');
});

Route::group(['prefix' => 'software'], function () {
    Route::get('/', 'SoftwareController@index');
    Route::get('/agregar', 'SoftwareController@agregar');
    Route::get('/{id}', 'SoftwareController@detalles');
    Route::post('/agregar', 'SoftwareController@crear');
    Route::get('/editar/{id}','SoftwareController@editar');
    Route::post('/editar/{id}','SoftwareController@actualizar');
    Route::get('/eliminar/{id}', 'SoftwareController@eliminar');
});

Route::group(['prefix' => 'movilidad'], function () {
    Route::get('/', 'MovilidadController@index');
    Route::get('/agregar', 'MovilidadController@agregar');
    Route::get('/{id}', 'MovilidadController@detalles');
    Route::post('/agregar', 'MovilidadController@crear');
    Route::get('/editar/{id}','MovilidadController@editar');
    Route::post('/editar/{id}','MovilidadController@actualizar');
    Route::get('/eliminar/{id}', 'MovilidadController@eliminar');
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
Route::auth();

Route::get('/home', 'HomeController@index');

/*
*
*   Rutas de administrador
*
*/

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@usuarios');
    Route::get('/activar/{id}', 'AdminController@activarUsuario');
    Route::get('/desactivar/{id}', 'AdminController@desactivarUsuario');
    Route::get('/password', 'AdminController@password');
    Route::post('/password', 'AdminController@set_password');
});

