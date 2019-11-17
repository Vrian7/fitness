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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('por_aqui',function(){
    return "volvi";
});

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('actividades','ActividadController');
Route::resource('estados_fisicos','EstadoFisicoController');
Route::resource('alimentos','AlimentoController');
Route::resource('usuarios','UserController');
Route::resource('macronutrientes','MacronutrienteController');
Route::resource('recomendaciones','RecomendacionController');
Route::resource('logros','LogroController');
Route::resource('avances','AvanceController');

//Route::post('user','UserController');
Route::get('get_alimentos','FitlabelAndroidController@getAlimentos');