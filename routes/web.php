<?php
use App\Empresa;

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
    return view('home');
});
// A R E A

Route::get('areas/editar/{area}','AreaController@edit');
Route::get('areas/lista', 'AreaController@list');
Route::get('areas','AreaController@index');
Route::get('areas/crear','AreaController@create');
Route::get('areas/{area}','AreaController@show');
Route::post('areas','AreaController@store');
Route::patch('areas/{area}', 'AreaController@update');
Route::delete('areas/{area}', 'AreaController@destroy');

// C A R R E R A S

Route::get('carreras/editar/{carrera}','CarreraController@edit');
Route::get('carreras/lista', 'CarreraController@list');
Route::get('carreras','CarreraController@index');
Route::get('carreras/crear','CarreraController@create');
Route::get('carreras/{carrera}','CarreraController@show');
Route::post('carreras','CarreraController@store');
Route::patch('carreras/{carrera}', 'CarreraController@update');
Route::delete('carreras/{carrera}', 'CarreraController@destroy');

// D E P A R T A M E N T O

Route::get('departamentos/editar/{departamento}','DepartamentoController@edit');
Route::get('departamentos/lista', 'DepartamentoController@list');
Route::get('departamentos','DepartamentoController@index');
Route::get('departamentos/crear','DepartamentoController@create');
Route::get('departamentos/{departamento}','DepartamentoController@show');
Route::post('departamentos','DepartamentoController@store');
Route::patch('departamentos/{departamento}', 'DepartamentoController@update');
Route::delete('departamentos/{departamento}', 'DepartamentoController@destroy');

// E T N I A S

Route::get('etnias/editar/{etnia}','EtniaController@edit');
Route::get('etnias/lista', 'EtniaController@list');
Route::get('etnias','EtniaController@index');
Route::get('etnias/crear','EtniaController@create');
Route::get('etnias/{etnia}','EtniaController@show');
Route::post('etnias','EtniaController@store');
Route::patch('etnias/{etnia}', 'EtniaController@update');
Route::delete('etnias/{etnia}', 'EtniaController@destroy');
