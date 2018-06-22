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


Route::pattern('comvocatorium', '[0-9]+');
Route::resource('convocatoria','Coordinador\ConvocatoriaController');

Route::pattern('proyecto', '[0-9]+');
Route::resource('proyecto','Investigador\ProyectoController');
Route::get('proyecto/especial', 'Investigador\ProyectoController@especial')->name('pryecto.especial');
Route::post('proyectoespecial', 'Investigador\ProyectoController@sespecial')->name('pryectoespecial');


Route::pattern('colaboradore', '[0-9]+');
Route::pattern('idpro', '[0-9]+');

//Route::resource('colaboradores','Investigador\ColaboradoresController');
//Route::delete('colaboradores/quitar/{idpro}/{colab}','Investigador\ColaboradoresController@destroy');
Route::get('colaboradores/{idpro}','Investigador\ColaboradoresController@index');
Route::post('colaboradores','Investigador\ColaboradoresController@invitar');
Route::post('colaboradores/desinvitar','Investigador\ColaboradoresController@desinvitar');
Route::post('colaboradores/aceptar' ,'Investigador\ColaboradoresController@aceptar' );
Route::post('colaboradores/rechazar','Investigador\ColaboradoresController@rechazar');


Route::get('entregables/{idpro}','Investigador\EntregablesController@index');
Route::post('entregables','Investigador\EntregablesController@agregar');
Route::post('entregables/eliminar','Investigador\EntregablesController@eliminar');

Route::get('cronograma/{idpro}','Investigador\CronogramaController@index');
Route::post('cronograma','Investigador\CronogramaController@agregar');
Route::post('cronograma/eliminar','Investigador\CronogramaController@eliminar');

Route::get('protocolo/{idpro}','Investigador\ProtocoloController@mostar');
Route::post('protocolo/{idpro}','Investigador\ProtocoloController@update');

Route::get('gastos/{idpro}','Investigador\GastosController@index');
Route::post('gastos','Investigador\GastosController@agregar');
Route::post('gastos/eliminar','Investigador\GastosController@eliminar');

Route::get('vinculacion/{idpro}','Investigador\VinculacionController@mostrar');
Route::post('vinculacion','Investigador\VinculacionController@agregar');
Route::post('vinculacion/eliminar','Investigador\VinculacionController@eliminar');

Route::get('someter/{idpro}','Investigador\SometerController@someter');
Route::post('someter/{idpro}','Investigador\SometerController@update');



Route::get('/', function () {
    return view('sistema.welcome');
});

Route::fallback(function () {
    return view('sistema.NotFound');
});

Route::get('registrados', 'Coordinador\IntegracionController@registrados');

Route::pattern('token', '[0-9]+');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
